# Three-Tier Web Application Deployment on AWS

## Project Overview

This project demonstrates the deployment of a three-tier web application using Amazon Web Services (AWS).

The application allows users to enter student details through a web interface. The submitted information is processed by the application server and stored in an Amazon RDS MySQL database.

## Architecture

The project consists of three tiers:

### 1. Web Tier
- Deployed on an Amazon EC2 instance in a public subnet.
- Apache web server used to host the web interface.
- Provides the interface for entering student details.

### 2. Application Tier
- Deployed on a separate Amazon EC2 instance in a private subnet.
- Handles application-side processing.
- Accessed securely through an SSH jump server.

### 3. Database Tier
- Amazon RDS with MySQL.
- Stores student information submitted through the application.
- Database connectivity configured between the application server and RDS.

## AWS Services and Technologies Used

- Amazon EC2
- Amazon VPC
- Amazon RDS (MySQL)
- AWS IAM
- Security Groups
- Public and Private Subnets
- Internet Gateway
- Route Tables
- Linux
- Apache
- SSH

## Network Configuration

- Created a custom VPC.
- Configured public and private subnets.
- Configured route tables and an Internet Gateway.
- Created security groups to control communication between tiers.
- Used an SSH jump server to access the private application server.

## Key Features

- Separate web, application and database tiers.
- Private application server.
- Secure server access through an SSH jump server.
- Student information submission through a web interface.
- Successful storage of student records in Amazon RDS.

## Key Learning Outcomes

- Understanding three-tier architecture.
- Building AWS network infrastructure.
- Configuring public and private subnets.
- Managing EC2 instances and security groups.
- Connecting application servers to RDS.
- Using SSH jump servers for private instance access.
- Deploying and testing a web application.

## Project Status

Successfully deployed and tested. Student information is submitted through the web interface and stored in the RDS database.

## Screenshots

Project architecture and deployment screenshots will be available in the screenshots folder.
