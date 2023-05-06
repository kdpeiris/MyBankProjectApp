# Additional configurations require to run the PHP web app on Azure App Service

After the infrastructure configuration,

Task 01: Configuration of Deployment Settings

- Navigate to the webapp (mybankprojectAppSvc) in the Azure portal
- On the left side, click Deployment Center
- In the Settings tab, select Source as GitHub from the drop down
- Provide the github account details (Organization, repository & Branch)
- Configure runtime stack as PHP, keep other settings as default & Save

Task 02: Disable SSL enforcement on the flexible database server

- Navigate to Azure Database for MySQL flexible server (mybankprojectdbserver)
- On the left side, click Server parameters
- Update the require_secure_transport server parameter to OFF & Save

Task 03: [OPTIONAL] Create a firewall rule on MySQL flexible server to explicitly allow outbound IPs of Azure webapp

- Navigate to the webapp (mybankprojectAppSvc) in the Azure portal
- On the left side, click Overview
- Go to the Properties tab
- Copy the Outbound IP addresses (7) from Networking section
- Navigate to Azure Database for MySQL flexible server (mybankprojectdbserver)
- On the left side, click Networking
- Add them to Firewall rules

Task 04: Connect to the database via the Azure CLI & create customers table. 

- Open Azure CLI and paste "mysql -h mybankprojectdbserver.mysql.database.azure.com -u kdpeiris -p mybankprojectdb;"
- Provide MySQL flexible server password
- Run below query to create customer table. 

CREATE TABLE `mybankprojectdb`.`customers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `given_name` VARCHAR(100) NOT NULL,
  `surname` VARCHAR(100) NOT NULL,
  `dob` DATE NOT NULL,
  `nic` VARCHAR(11) NOT NULL,
  `gender` VARCHAR(45) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone_no` VARCHAR(11) NOT NULL,
  `account_type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));
  
 ***Now Azure webapp (mybankprojectappsvc.azurewebsites.net) is ready!
