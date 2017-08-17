pipeline {
    agent any 

    stages {
        stage('Build Deps') {
            steps {
                echo "Branch is ${env.BRANCH_NAME}..."
        
                withNPM(npmrcConfig:'my-custom-npmrc') {
                    echo "Performing npm build..."
                    sh 'npm install'
                }
            }
        }
        stage('Dev') {
            withNPM(npmrcConfig:'my-custom-npmrc') {
                echo "Performing npm dev..."
                sh 'npm run dev'
            }
        }
        stage('Staging') {
            withNPM(npmrcConfig:'my-custom-npmrc') {
                echo "Performing npm tests..."
                sh 'npm run test && npm run btest'
            }
        }
        stage('Production') {
            withNPM(npmrcConfig:'my-custom-npmrc') {
                echo "Performing npm production..."
                sh 'npm run prod'
            }
        }
    }
}