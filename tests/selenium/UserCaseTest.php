<?php

/**
 * Browser Automation tests for use-cases
 */

namespace SeleniumTests;

use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Actions;
use Facebook\WebDriver\Interactions\WebDriverActions;

use Lmc\Steward\Test\AbstractTestCase;

define( 'TEST_EMAIL', 'alex.gailey-white@panlogic.co.uk' );
define( 'TEST_URL', 'http://weprotect.dev/' );

class UserCaseTest extends AbstractTestCase {
    
    /**
     * User case - Government Non-member
     * Find other members
     */
    public function testGovernmentNonMemberFindCountriesInTheInitiative() {

        // Load the URL (will wait until page is loaded)
        $this->wd->get( TEST_URL );

        // Begin the joining process, go to view information about joining.
        $joinUsMenu = $this->wd->findElement( WebDriverBy::cssSelector( 'a[href*="/join-us/"]' ) );
        $this->assertContains( 'nav-link', $joinUsMenu->getAttribute('class') );
        $this->log('Opening "Join Us" menu');
        $joinUsMenu->click();

        $ourMembersLinkElement = WebDriverBy::cssSelector( 'a.dropdown-item[href*="/our-members/"]' );
        $ourMembersLink = $this->wd->findElement( $ourMembersLinkElement );

        $action = new WebDriverActions( $this->wd );
        $action->moveToElement( $ourMembersLink );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $ourMembersLinkElement )
        );

        $this->log('Clicking "Our members" link');
        $ourMembersLink->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/our-members/' )
        );

        // Select the US
        $usRegion = $this->wd->findElement( WebDriverBy::Id( 'jqvmap3_us' ) )->click();

        $modalElement = WebDriverBy::cssSelector( '.modal-dialog' );
        $modal = $this->wd->findElement( $modalElement );

        $action = new WebDriverActions( $this->wd );
        $action->moveToElement( $modal );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $modalElement )
        );

        $memberName = $this->wd->findElement( WebDriverBy::cssSelector( '.modal-dialog [data-name] p' ) );
        $this->assertEquals( 'United States', $memberName->getText() );

        $this->wd->quit();
    }

    /**
     * User case - NGO Non-member
     * Become a member (as an industry)
     */
    public function testNgoNonMemberBecomeAMemberAsAnIndustry() {
        
        // Load the URL (will wait until page is loaded)
        $this->wd->get( TEST_URL );
        
        // Begin the joining process, go to view information about joining.
        $joinUsMenu = $this->wd->findElement( WebDriverBy::cssSelector( 'a[href*="/join-us/"]' ) );
        $this->assertContains( 'nav-link', $joinUsMenu->getAttribute('class') );
        $this->log('Opening "Join Us" menu');
        $joinUsMenu->click();

        $joinUsLinkElement = WebDriverBy::cssSelector( 'a.dropdown-item[href*="/join-us/"]' );
        $joinUsLink = $this->wd->findElement( $joinUsLinkElement );

        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $joinUsLink );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $joinUsLinkElement )
        );

        $this->log('Clicking "Join Us" link');
        $joinUsLink->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/join-us/' )
        );

        // Go to application form area to begin process of entering details.
        $applyForMembershipElement = WebDriverBy::cssSelector( 'a.btn[href*="/apply-for-membership/"]' );
        $applyForMembershipButton = $this->wd->findElement( $applyForMembershipElement );
        
        $this->log('Scrolling to "Apply for membership"');
        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $applyForMembershipButton );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $applyForMembershipElement )
        );
        
        $this->log('Clicking "Apply for membership"');
        $applyForMembershipButton->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/apply-for-membership/' )
        );

        // Select industries option.
        $industryFormOption = $this->wd->findElement( WebDriverBy::cssSelector( 'a[href*="/apply-for-membership/industry-form/"]' ) );
        $this->log('Clicking "Industry" option');
        $industryFormOption->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/apply-for-membership/industry-form/' )
        );

        $faker = \Faker\Factory::create( 'en_GB' );

        // Set first name
        $firstNameField = $this->wd->findElement( WebDriverBy::Id( 'first-name' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->firstName() );

        // Set last name
        $lastNameField = $this->wd->findElement( WebDriverBy::Id( 'last-name' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->lastName() );

        // Set email
        $emailField = $this->wd->findElement( WebDriverBy::Id( 'email-address' ) )->click();
        $this->wd->getKeyboard()->sendKeys( TEST_EMAIL );

        // Set country
        $countryElement =  WebDriverBy::Id( 'country' );
        $countryField = $this->wd->findElement( $countryElement );

        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $countryField );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $countryElement )
        );

        $countryField->click();
        $this->wd->getKeyboard()->sendKeys( array(
            'United K'
        ) );

        // Set organisation
        $organisationField = $this->wd->findElement( WebDriverBy::Id( 'organisation' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->company() );

        // Set contact number
        $contactNumberField = $this->wd->findElement( WebDriverBy::Id( 'contact-number' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->e164PhoneNumber() );

        // Set minister
        $ministerField = $this->wd->findElement( WebDriverBy::Id( 'minister-responsible' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->name() );

        // Set job title
        $jobTitleElement = WebDriverBy::Id( 'job-title' );
        $jobTitleField = $this->wd->findElement( $jobTitleElement );

        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $jobTitleField );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $jobTitleElement )
        );

        $jobTitleField->click();
        $this->wd->getKeyboard()->sendKeys( $faker->catchPhrase() );

        // Set minister signoff
        $ministerSignoffField = $this->wd->findElement( WebDriverBy::Id( 'minister-signoff2' ) )->click();

        // Set message
        $messageField = $this->wd->findElement( WebDriverBy::Id( 'message' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->text( 100 ) );

        $submitButton = $this->wd->findElement( WebDriverBy::cssSelector( '.btn-primary' ) );

        $this->log('Clicking submit');
        $submitButton->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/apply-for-membership/industry-form/#wpcf7' )
        );

        // Check we have a success message
        $submitMessage = $this->wd->findElement( WebDriverBy::cssSelector( '.wpcf7-response-output' ) );
        $this->assertContains( 'alert-success', $submitMessage->getAttribute('class') );
        $this->wd->quit();
    }

    /**
     * User case - NGO Non-member
     * Become a member (as an organisation)
     */
    public function testNonMemberNgoBecomeAMemberAsAnOrganisation() {

        // Load the URL (will wait until page is loaded)
        $this->wd->get( TEST_URL );
        
        // Begin the joining process, go to view information about joining.
        $joinUsMenu = $this->wd->findElement( WebDriverBy::cssSelector( 'a[href*="/join-us/"]' ) );
        $this->assertContains( 'nav-link', $joinUsMenu->getAttribute('class') );
        $this->log('Opening "Join Us" menu');
        $joinUsMenu->click();

        $joinUsLinkElement = WebDriverBy::cssSelector( 'a.dropdown-item[href*="/join-us/"]' );
        $joinUsLink = $this->wd->findElement( $joinUsLinkElement );

        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $joinUsLink );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $joinUsLinkElement )
        );

        $this->log('Clicking "Join Us" link');
        $joinUsLink->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/join-us/' )
        );

        // Go to application form area to begin process of entering details.
        $applyForMembershipElement = WebDriverBy::cssSelector( 'a.btn[href*="/apply-for-membership/"]' );
        $applyForMembershipButton = $this->wd->findElement( $applyForMembershipElement );
        
        $this->log('Scrolling to "Apply for membership"');
        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $applyForMembershipButton );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $applyForMembershipElement )
        );
        
        $this->log('Clicking "Apply for membership"');
        $applyForMembershipButton->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/apply-for-membership/' )
        );

        // Select government option.
        $industryFormOption = $this->wd->findElement( WebDriverBy::cssSelector( 'a[href*="/apply-for-membership/organisation-form/"]' ) );
        $this->log('Clicking "Organisation" option');
        $industryFormOption->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/apply-for-membership/organisation-form/' )
        );

        $faker = \Faker\Factory::create( 'en_GB' );

        // Set first name
        $firstNameField = $this->wd->findElement( WebDriverBy::Id( 'first-name' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->firstName() );

        // Set last name
        $lastNameField = $this->wd->findElement( WebDriverBy::Id( 'last-name' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->lastName() );

        // Set email
        $emailField = $this->wd->findElement( WebDriverBy::Id( 'email-address' ) )->click();
        $this->wd->getKeyboard()->sendKeys( TEST_EMAIL );

        // Set country
        $countryElement =  WebDriverBy::Id( 'country' );
        $countryField = $this->wd->findElement( $countryElement );

        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $countryField );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $countryElement )
        );

        $countryField->click();
        $this->wd->getKeyboard()->sendKeys( array(
            'United K'
        ) );

        // Set organisation
        $organisationField = $this->wd->findElement( WebDriverBy::Id( 'organisation' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->company() );

        // Set contact number
        $contactNumberField = $this->wd->findElement( WebDriverBy::Id( 'contact-number' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->e164PhoneNumber() );

        // Set minister
        $ministerField = $this->wd->findElement( WebDriverBy::Id( 'minister-responsible' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->name() );

        // Set job title
        $jobTitleElement = WebDriverBy::Id( 'job-title' );
        $jobTitleField = $this->wd->findElement( $jobTitleElement );

        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $jobTitleField );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $jobTitleElement )
        );

        $jobTitleField->click();
        $this->wd->getKeyboard()->sendKeys( $faker->catchPhrase() );

        // Set minister signoff
        $ministerSignoffField = $this->wd->findElement( WebDriverBy::Id( 'minister-signoff2' ) )->click();

        // Set message
        $messageField = $this->wd->findElement( WebDriverBy::Id( 'message' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->text( 100 ) );

        $submitButton = $this->wd->findElement( WebDriverBy::cssSelector( '.btn-primary' ) );

        $this->log('Clicking submit');
        $submitButton->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/apply-for-membership/organisation-form/#wpcf7' )
        );

        // Check we have a success message
        $submitMessage = $this->wd->findElement( WebDriverBy::cssSelector( '.wpcf7-response-output' ) );
        $this->assertContains( 'alert-success', $submitMessage->getAttribute('class') );
        $this->wd->quit();
    }

    /**
     * User case - Government Non-member
     * Become a member (as a government)
     */
    public function testGovernmentNonMemberBecomeAMemberAsAGovernment() {

        // Load the URL (will wait until page is loaded)
        $this->wd->get( TEST_URL );
        
        // Begin the joining process, go to view information about joining.
        $joinUsMenu = $this->wd->findElement( WebDriverBy::cssSelector( 'a[href*="/join-us/"]' ) );
        $this->assertContains( 'nav-link', $joinUsMenu->getAttribute('class') );
        $this->log('Opening "Join Us" menu');
        $joinUsMenu->click();

        $joinUsLinkElement = WebDriverBy::cssSelector( 'a.dropdown-item[href*="/join-us/"]' );
        $joinUsLink = $this->wd->findElement( $joinUsLinkElement );

        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $joinUsLink );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $joinUsLinkElement )
        );

        $this->log('Clicking "Join Us" link');
        $joinUsLink->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/join-us/' )
        );

        // Go to application form area to begin process of entering details.
        $applyForMembershipElement = WebDriverBy::cssSelector( 'a.btn[href*="/apply-for-membership/"]' );
        $applyForMembershipButton = $this->wd->findElement( $applyForMembershipElement );
        
        $this->log('Scrolling to "Apply for membership"');
        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $applyForMembershipButton );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $applyForMembershipElement )
        );
        
        $this->log('Clicking "Apply for membership"');
        $applyForMembershipButton->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/apply-for-membership/' )
        );

        // Select government option.
        $industryFormOption = $this->wd->findElement( WebDriverBy::cssSelector( 'a[href*="/apply-for-membership/government-form/"]' ) );
        $this->log('Clicking "Government" option');
        $industryFormOption->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/apply-for-membership/government-form/' )
        );

        $faker = \Faker\Factory::create( 'en_GB' );

        // Set first name
        $firstNameField = $this->wd->findElement( WebDriverBy::Id( 'first-name' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->firstName() );

        // Set last name
        $lastNameField = $this->wd->findElement( WebDriverBy::Id( 'last-name' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->lastName() );

        // Set email
        $emailField = $this->wd->findElement( WebDriverBy::Id( 'email-address' ) )->click();
        $this->wd->getKeyboard()->sendKeys( TEST_EMAIL );

        // Set country
        $countryElement =  WebDriverBy::Id( 'country' );
        $countryField = $this->wd->findElement( $countryElement );

        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $countryField );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $countryElement )
        );

        $countryField->click();
        $this->wd->getKeyboard()->sendKeys( array(
            'United K'
        ) );

        // Set organisation
        $organisationField = $this->wd->findElement( WebDriverBy::Id( 'organisation' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->company() );

        // Set contact number
        $contactNumberField = $this->wd->findElement( WebDriverBy::Id( 'contact-number' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->e164PhoneNumber() );

        // Set minister
        $ministerField = $this->wd->findElement( WebDriverBy::Id( 'minister-responsible' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->name() );

        // Set job title
        $jobTitleElement = WebDriverBy::Id( 'job-title' );
        $jobTitleField = $this->wd->findElement( $jobTitleElement );

        $action = new WebDriverActions( $this->wd ); 
        $action->moveToElement( $jobTitleField );
        $action->perform();
        $this->wd->wait()->until(
            WebDriverExpectedCondition::visibilityOfElementLocated( $jobTitleElement )
        );

        $jobTitleField->click();
        $this->wd->getKeyboard()->sendKeys( $faker->catchPhrase() );

        // Set minister signoff
        $ministerSignoffField = $this->wd->findElement( WebDriverBy::Id( 'minister-signoff2' ) )->click();

        // Set message
        $messageField = $this->wd->findElement( WebDriverBy::Id( 'message' ) )->click();
        $this->wd->getKeyboard()->sendKeys( $faker->text( 100 ) );

        $submitButton = $this->wd->findElement( WebDriverBy::cssSelector( '.btn-primary' ) );

        $this->log('Clicking submit');
        $submitButton->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/apply-for-membership/government-form/#wpcf7' )
        );

        // Check we have a success message
        $submitMessage = $this->wd->findElement( WebDriverBy::cssSelector( '.wpcf7-response-output' ) );
        $this->assertContains( 'alert-success', $submitMessage->getAttribute('class') );
        $this->wd->quit();
    }

    /**
     * User case - Member
     * Access the MNR
     */
    public function testMemberCanAccessModelNationalResponse() {
        
        // Load the URL (will wait until page is loaded)
        $this->wd->get( TEST_URL );
        
        // Begin the joining process, go to view information about joining.
        $modelNationalResponseLink = $this->wd->findElement( WebDriverBy::cssSelector( 'a[href*="/the-model-national-response/"]' ) );
        $this->assertContains( 'nav-link', $modelNationalResponseLink->getAttribute('class') );
        $this->log('Clicking "Model National Response" link');
        $modelNationalResponseLink->click();

        $this->wd->wait()->until(
            WebDriverExpectedCondition::urlContains( '/the-model-national-response/' )
        );

        $h2Title = $this->wd->findElement( WebDriverBy::tagName( 'h2' ) );
        $this->assertContains( 'The Model National Response', $h2Title->getText() );
        $this->wd->quit();
    }
}