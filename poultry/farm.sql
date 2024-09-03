CREATE TABLE Manager (
    ManagerID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(50),
    Username VARCHAR(20) UNIQUE,
    Password VARCHAR(255), -- Use appropriate encryption/hashing
    ContactNumber VARCHAR(15)
);
CREATE TABLE Birds (
    BirdID INT PRIMARY KEY AUTO_INCREMENT,
    FarmID INT,
    Breed VARCHAR(50),
    DateOfBirth DATE,
    Gender ENUM('Male', 'Female'),
    HealthStatus VARCHAR(100)
);
CREATE TABLE Vaccination (
    VaccinationID INT PRIMARY KEY AUTO_INCREMENT,
    BirdID INT,
    VaccinationDate DATE,
    VaccinationType VARCHAR(50),
    VeterinarianName VARCHAR(100),
    FOREIGN KEY (BirdID) REFERENCES Birds(BirdID)
);
CREATE TABLE FeedConsumption (
    ConsumptionID INT PRIMARY KEY AUTO_INCREMENT,
    BirdID INT,
    DateConsumed DATE,
    FeedType VARCHAR(50),
    QuantityConsumed DECIMAL(10, 2),
    FOREIGN KEY (BirdID) REFERENCES Birds(BirdID)
);
CREATE TABLE Veterinary (
    VeterinaryID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(50),
    ContactNumber VARCHAR(15)
);
