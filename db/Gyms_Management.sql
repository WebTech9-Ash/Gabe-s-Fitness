
Drop database if exists Gyms_Management;

create database Gyms_Management;


use Gyms_Management;

-- Users table
CREATE TABLE Users (
    UserID INT PRIMARY KEY,
    UserName VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    UserType ENUM('Gym Owner', 'Gym Goer', 'Trainer') NOT NULL,
    RegistrationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    LastLogin TIMESTAMP,
    UNIQUE (Email)
);

-- Gyms Table
CREATE TABLE Gyms (
    GymID INT PRIMARY KEY,
    GymName VARCHAR(255) NOT NULL,
    OwnerID INT,
    Location VARCHAR(255),
    EstablishmentDate DATE,
    FOREIGN KEY (OwnerID) REFERENCES Users(UserID)
);

-- Memberships Table
CREATE TABLE Memberships (
    MembershipID INT PRIMARY KEY,
    UserID INT,
    GymID INT,
    JoinDate DATE,
    MembershipType VARCHAR(255),
    ExpiryDate DATE,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (GymID) REFERENCES Gyms(GymID)
);

-- Trainers Table
CREATE TABLE Trainers (
    TrainerID INT PRIMARY KEY,
    UserID INT,
    GymID INT,
    Specialization VARCHAR(255),
    Certification VARCHAR(255),
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (GymID) REFERENCES Gyms(GymID)
);

-- Equipment Table
CREATE TABLE Equipment (
    EquipmentID INT PRIMARY KEY,
    EquipmentName VARCHAR(255) NOT NULL,
    GymID INT,
    PurchaseDate DATE,
    WarrantyExpirationDate DATE,
    CurrentStatus ENUM('In Use', 'Available', 'Under Maintenance') NOT NULL,
    FOREIGN KEY (GymID) REFERENCES Gyms(GymID)
);

-- ClassSessions Table
CREATE TABLE ClassSessions (
    SessionID INT PRIMARY KEY,
    TrainerID INT,
    ClassName VARCHAR(255) NOT NULL,
    ScheduleStartDateTime DATETIME,
    ScheduleEndDateTime DATETIME,
    MaxCapacity INT,
    Description TEXT,
    ClassType VARCHAR(255),
    FOREIGN KEY (TrainerID) REFERENCES Trainers(TrainerID)
);

-- ClassAttendees Table
CREATE TABLE ClassAttendees (
    AttendeeID INT PRIMARY KEY,
    SessionID INT,
    UserID INT,
    AttendanceDateTime DATETIME,
    FeedbackRating INT,
    FeedbackComment TEXT,
    FOREIGN KEY (SessionID) REFERENCES ClassSessions(SessionID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

-- EquipmentUsageLog Table
CREATE TABLE EquipmentUsageLog (
    LogID INT PRIMARY KEY,
    EquipmentID INT,
    UserID INT,
    SessionID INT,
    UsageDateTime DATETIME,
    Duration INT,
    Purpose VARCHAR(255),
    FOREIGN KEY (EquipmentID) REFERENCES Equipment(EquipmentID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (SessionID) REFERENCES ClassSessions(SessionID)
);
-- Workout Table
CREATE TABLE Workouts (
    WorkoutID INT PRIMARY KEY,
    UserID INT,
    WorkoutName VARCHAR(255) NOT NULL,
    Description TEXT,
    CreatedDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

-- WorkoutExercises Table
CREATE TABLE WorkoutExercises (
    ExerciseID INT PRIMARY KEY,
    WorkoutID INT,
    ExerciseName VARCHAR(255) NOT NULL,
    Sets INT,
    Reps INT,
    RestDuration INT,  -- in seconds
    FOREIGN KEY (WorkoutID) REFERENCES Workouts(WorkoutID)
);

