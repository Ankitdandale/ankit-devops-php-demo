pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/Ankitdandale/ankit-devops-php-demo.git'
            }
        }

        stage('Build & Start Docker') {
            steps {
                sh 'docker-compose down'
                sh 'docker-compose up -d --build'
            }
        }

        stage('Verify') {
            steps {
                sh 'docker ps'
            }
        }
    }
}
