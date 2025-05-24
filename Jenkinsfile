pipeline {
    agent {
        docker {
            image 'php:8.2-cli' // Use PHP 8.2 CLI Docker image
        }
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Test') {
            steps {
                // Run tests inside PHP container
                // Assuming test_index.php and index.php are in repo root
                sh 'php test_index.php'
            }
        }
    }

    post {
        always {
            echo 'Pipeline finished.'
        }
    }
}
