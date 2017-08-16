pipeline {
    agent any 

    stages {
        stage('Dev') {
            steps { 
                sh 'npm run dev' 
            }
        }
        stage('Staging') {
            steps {
                sh 'npm run test && npm run btest'
            }
        }
        stage('Production') {
            steps {
                sh 'npm run prod'
            }
        }
    }
}