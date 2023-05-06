# MyBankProjectApp
PHP Code for the Web App

Once Infrastructure build,

Go to Web App Resource (mybankprojectAppSvc) -> Deployment Center -> Settings
Select Source from the drop down (GitHub) & provide Organization, repository & Branch
Configure runtime stack (Stack: PHP), Keep others default & save.

Get the Outbound IP addresses (7) from Networking section in the Overview of Web App Service (mybankprojectAppSvc) & Add them to Firewall rules in Azure Database for MySQL flexible server

To disable SSL enforcement on your flexible server, Go to Azure Database for MySQL flexible server ->Server parameters->Change require_secure_transport="False" & Save

mysql -h mybankprojectdbserver.mysql.database.azure.com -u kdpeiris -p mybankprojectdb;

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
