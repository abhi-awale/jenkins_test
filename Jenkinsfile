pipeline {
    agent {
        docker {
            image 'php:8.2-cli'  // Official PHP CLI Docker image
            args '-v $PWD:/app'  // Mount current workspace to /app inside container
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
                // Assuming test_add.php and add.php are in repo root
                sh 'php test_add.php'
            }
        }
    }

    post {
        always {
            echo 'Pipeline finished.'
        }
    }
}
