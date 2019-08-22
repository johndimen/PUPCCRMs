-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 11:37 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pupccrm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `crm_activitylist`
--

CREATE TABLE `crm_activitylist` (
  `CRM_ Activity_SerialNo` int(11) NOT NULL,
  `CRM_ Activity_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_ Activity_Date_Start` date NOT NULL,
  `CRM_ Activity_Notif` int(1) NOT NULL,
  `CRM_Activity_Notif_Time` time NOT NULL,
  `CRM_ Acivity_Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Activity_Task_SerialNo_FK` int(11) NOT NULL,
  `CRM_Activity_Task_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Activity_Date_End` date NOT NULL,
  `CRM_ Activity_Callendar_SerialNo_FK` int(11) NOT NULL,
  `CRM_Activitylist_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Activitylist_Login_Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Activitylist_Date_Added` date NOT NULL,
  `CRM_Activitylist_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_admin_contact_details`
--

CREATE TABLE `crm_admin_contact_details` (
  `CRM_Contact_Detail_SerialNo` int(11) NOT NULL,
  `CRM_User_Contact_Detail_FK` int(11) NOT NULL,
  `CRM_Admin_Contact_Type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Admin_Contact_Detail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Contact_Status` int(1) NOT NULL,
  `CRM_Contact_Login_FK` int(11) NOT NULL,
  `CRM_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Added` date NOT NULL,
  `CRM_Updatedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_admin_user_details`
--

CREATE TABLE `crm_admin_user_details` (
  `CRM_User_Detail_SerialNo` int(11) NOT NULL,
  `CRM_User_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Salutations` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_First_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Middle_Name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Last_Name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Extensions` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Job_Title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Admin_Gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Admin_Email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Admin_Highest_Education` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Admin_Location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Admin_Status` int(1) NOT NULL,
  `CRM_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Added` date NOT NULL,
  `CRM_Updateby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crm_admin_user_details`
--

INSERT INTO `crm_admin_user_details` (`CRM_User_Detail_SerialNo`, `CRM_User_Login_SerialNo_FK`, `CRM_Salutations`, `CRM_First_Name`, `CRM_Middle_Name`, `CRM_Last_Name`, `CRM_Extensions`, `CRM_Job_Title`, `CRM_Admin_Gender`, `CRM_Admin_Email`, `CRM_Admin_Highest_Education`, `CRM_Admin_Location`, `CRM_Admin_Status`, `CRM_Addedby`, `CRM_Date_Added`, `CRM_Updateby`, `CRM_Date_Updated`) VALUES
(0, 0, 'mr', 'admin', 'admin', 'admin', 'n/a', 'admin', 'male', 'admin@admin.com', 'college', 'manila', 1, '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `crm_admin_user_general_permissions`
--

CREATE TABLE `crm_admin_user_general_permissions` (
  `CRM_User_Permission_SerialNo` int(11) NOT NULL,
  `CRM_User_Permission_Role_SerialNo_FK` int(11) NOT NULL,
  `CRM_Task_Permission` int(1) NOT NULL,
  `CRM_User_Permission` int(1) NOT NULL,
  `CRM_Export_permission` int(1) NOT NULL,
  `CRM_Cases_permission` int(1) NOT NULL,
  `CRM_Reports_Permission` int(1) NOT NULL,
  `CRM_Concession_Permission` int(1) NOT NULL,
  `CRM_Permission_Status` int(1) NOT NULL,
  `CRM_General_Permission_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Added` date NOT NULL,
  `CRM_Updateby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_admin_user_login`
--

CREATE TABLE `crm_admin_user_login` (
  `CRM_User_Login_SerialNo` int(11) NOT NULL,
  `CRM_Login_Username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Login_Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Account_Status` int(1) NOT NULL,
  `CRM_Login_fk` int(11) NOT NULL,
  `CRM_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Added` date NOT NULL,
  `CRM_Updateby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crm_admin_user_login`
--

INSERT INTO `crm_admin_user_login` (`CRM_User_Login_SerialNo`, `CRM_Login_Username`, `CRM_Login_Password`, `CRM_Account_Status`, `CRM_Login_fk`, `CRM_Addedby`, `CRM_Date_Added`, `CRM_Updateby`, `CRM_Date_Updated`) VALUES
(0, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 1, 0, '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `crm_admin_user_module_permissions`
--

CREATE TABLE `crm_admin_user_module_permissions` (
  `CRM_User_Module_Permission_SerialNo` int(11) NOT NULL,
  `CRM_User_Module_Role_SerialNo_FK` int(11) NOT NULL,
  `CRM_User_Module_Permission_SerialNo_FK` int(11) NOT NULL,
  `CRM_Create_permission` int(1) NOT NULL,
  `CRM_Create_Archive_Permission` int(1) NOT NULL,
  `CRM_Read_Permission` int(1) NOT NULL,
  `CRM_Read_Archive_Permission` int(1) NOT NULL,
  `CRM_Edit_permission` int(1) NOT NULL,
  `CRM_Trash_Permission` int(1) NOT NULL,
  `CRM_System_bulletin_Permission` int(1) NOT NULL,
  `CRM_Module_Permission_Status` int(1) NOT NULL,
  `CRM_Module_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Added` date NOT NULL,
  `CRM_Updatedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_admin_user_role`
--

CREATE TABLE `crm_admin_user_role` (
  `CRM_User_Role_SerialNo` int(11) NOT NULL,
  `CRM_User_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_User_Role_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Role_Status` int(11) NOT NULL,
  `CRM_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Added` date NOT NULL,
  `CRM_Updateby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_audit_trail`
--

CREATE TABLE `crm_audit_trail` (
  `CRM_Audit_Trail_SerialNo` int(11) NOT NULL,
  `CRM_Audit_Trail_User_Detail_SerialNo_FK` int(11) NOT NULL,
  `CRM_Audit_Trail_User_Role_SerialNo_FK` int(11) NOT NULL,
  `CRM_Audit_Trail_User_FirstName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Audit_Trail_User_Role` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Audit_Trail_Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `CRM_Audit_Trail_Action` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Audit_Trail_Old_value` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Audit_Trail_New_Value` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_calendarlist`
--

CREATE TABLE `crm_calendarlist` (
  `CRM_Callendar_SerialNo` int(11) NOT NULL,
  `CRM_Callendar_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Callendar_Date_Start` date NOT NULL,
  `CRM_Callerdar_Date_End` date NOT NULL,
  `CRM_Callendar_Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Callendar_Will_PopUp_Notif` int(1) NOT NULL,
  `CRM_Callendar_PopUp_Time` time NOT NULL,
  `CRM_Callendar_Status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Calendarlist_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Calendarlist_Login_Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Calendarlist_Date_Added` date NOT NULL,
  `CRM_Calendarlist_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_caselist`
--

CREATE TABLE `crm_caselist` (
  `CRM_Case_SerialNo` int(11) NOT NULL,
  `CRM_Case_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Case_Status_Type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Case_Priority_Type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Case_Type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Case_Login_Username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Case_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Case_Description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_isArchived` int(1) NOT NULL,
  `CRM_Case_Has_Attachment` int(1) NOT NULL,
  `CRM_Case_Attachment_URL` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Caselist_Date_Added` date NOT NULL,
  `CRM_Caselist_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_concession_contact`
--

CREATE TABLE `crm_concession_contact` (
  `CRM_Concession_Contact_SerialNo` int(11) NOT NULL,
  `CRM_Profile_Contact_SerialNo_FK` int(11) NOT NULL,
  `CRM_Concession_Contact_Type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Contact_Detail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Contact_Status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_hasContact` int(1) NOT NULL,
  `CRM_Contact_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Contact_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Contact_Date_Added` date NOT NULL,
  `CRM_Contact_Updated_Date` date NOT NULL,
  `CRM_Contact_UpdatedBy` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_concession_contract`
--

CREATE TABLE `crm_concession_contract` (
  `CRM_Concession_Contract_SerialNo` int(11) NOT NULL,
  `CRM_Concession_Contract_Profile_SerialNo_FK` int(11) NOT NULL,
  `CRM_Concession_Contract_Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Contract_StallName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Contract_RGO_Consignee` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Has_RGO_Consignee_Signature` int(1) NOT NULL,
  `CRM_Concession_Contract_Date_Signed` date NOT NULL,
  `CRM_Concession_Contract_Duration` int(11) NOT NULL,
  `CRM_Concession_Contract_Consignor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Has_Consignor_Signature` int(1) NOT NULL,
  `CRM_Concession_Contract_Desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Contract_Status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_hasContract` int(1) NOT NULL,
  `CRM_Concession_Contract_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Contract_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Contract_Date_Added` date NOT NULL,
  `CRM_Contract_Updatedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Contract_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_concession_equipment`
--

CREATE TABLE `crm_concession_equipment` (
  `CRM_Concession_Equipment_SerialNo` int(11) NOT NULL,
  `CRM_Concession_Equipment_Profile_SerialNo_FK` int(11) NOT NULL,
  `CRM_Concession_Equipment_Brand` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Equipment_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Equipment_Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Equipment_Wattage` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_hasEquipment` int(1) NOT NULL,
  `CRM_Concession_Equipment_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Equipment_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Equipment_Date_Added` date NOT NULL,
  `CRM_Equipment_Updatedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Equipment_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_concession_experience`
--

CREATE TABLE `crm_concession_experience` (
  `CRM_Concession_Experience_SerialNo` int(11) NOT NULL,
  `CRM_Concession_Experience_Profile_SerialNo_FK` int(11) NOT NULL,
  `CRM_Concession_Place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Year_Started` date NOT NULL,
  `CRM_Concession_Current_Year` date NOT NULL,
  `CRM_Concession_ HasExperience` int(1) NOT NULL,
  `CRM_Concession_Experience_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Experience_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Experience_Date_Added` date NOT NULL,
  `CRM_Experience_Updatedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Experience_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_concession_food_items`
--

CREATE TABLE `crm_concession_food_items` (
  `CRM_Concession_Food_Item_SerialNo` int(11) NOT NULL,
  `CRM_Profile_Food_SerialNo_FK` int(11) NOT NULL,
  `CRM_Concession_Food_Item_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Food_Items_Price` int(11) NOT NULL,
  `CRM_Concession_Food_Item_Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_hasFood_Items` int(1) NOT NULL,
  `CRM_Concession_Food_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Food_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Food_Date_Added` date NOT NULL,
  `CRM_Food_Updatedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Food_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_concession_other_items`
--

CREATE TABLE `crm_concession_other_items` (
  `CRM_Concession_Other_Items_SerialNo` int(11) NOT NULL,
  `CRM_Other_Items_Profile_SerialNo_FK` int(11) NOT NULL,
  `CRM_Concession_Other_Items_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Other_Items_Price` int(11) NOT NULL,
  `CRM_Concession_Other_Items_Desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_hasOther_Items` int(1) NOT NULL,
  `CRM_Concession_Other_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Other_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Other_Date_Added` date NOT NULL,
  `CRM_Other_Updatedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Other_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_concession_profile`
--

CREATE TABLE `crm_concession_profile` (
  `CRM_Concession_Profile_SerialNo` int(11) NOT NULL,
  `CRM_Concession_Stall_Number` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Area` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Owner_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Function` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Date_Applied` date NOT NULL,
  `CRM_Concession_Remarks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_IsActive` int(1) NOT NULL,
  `CRM_Profile_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Concession_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Date_Added` date NOT NULL,
  `CRM_Concession_Updatedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_concession_requirements`
--

CREATE TABLE `crm_concession_requirements` (
  `CRM_Concession_Requirements_SerialNo` int(11) NOT NULL,
  `CRM_Requirements_Profile_SerialNo_FK` int(11) NOT NULL,
  `CRM_Concession_Requirements_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Requirements_Issued_date` date NOT NULL,
  `CRM_Concession_Requirements_Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_hasRequirements` int(1) NOT NULL,
  `CRM_Concession_Requirements_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Requirements_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Requirements_Date_Added` date NOT NULL,
  `CRM_Requirements_Updatedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Requirements_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_concession_school_items`
--

CREATE TABLE `crm_concession_school_items` (
  `CRM_Concession_Items_SerialNo` int(11) NOT NULL,
  `CRM_Items_Profile_SerialNo_FK` int(11) NOT NULL,
  `CRM_Concession_School_Items_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_School_Item_Price` int(11) NOT NULL,
  `CRM_Concession_School_Item_Desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_hasSchool_Items` int(1) NOT NULL,
  `CRM_Concession_School_Item_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_School_Item_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_School_Item_Date_Added` date NOT NULL,
  `CRM_School_Item_Updatedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_School_Item_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_concession_services`
--

CREATE TABLE `crm_concession_services` (
  `CRM_Concession_Services_SerialNo` int(11) NOT NULL,
  `CRM_Services_Profile_SerialNo_FK` int(11) NOT NULL,
  `CRM_Concession_Services_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Services_Price_Range_Lower` int(5) NOT NULL,
  `CRM_Concession_Services_Price_Range_Higher` int(5) NOT NULL,
  `CRM_Concession_Services_Desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Concession_Services_Date_Added` date NOT NULL,
  `CRM_Services_isActive` int(1) NOT NULL,
  `CRM_Concession_Services_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Services_Addedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Services_Date_Added` date NOT NULL,
  `CRM_Services_Updatedby` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Services_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_feedback`
--

CREATE TABLE `crm_feedback` (
  `CRM_Feedback_SerialNo` int(11) NOT NULL,
  `CRM_Feedback_Message` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Feedback_Evaluation` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Feedback_Stars` int(1) NOT NULL,
  `CRM_Feedback_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_feedback_detail`
--

CREATE TABLE `crm_feedback_detail` (
  `CRM_Feedback_Detail_SerialNo` int(11) NOT NULL,
  `CRM_Feedback_SerialNo_FK` int(11) NOT NULL,
  `CRM_Feedback_Sender_SerialNo_FK` int(11) NOT NULL,
  `CRM_Feedback_Detail_Profile_SerialNo_FK` int(11) NOT NULL,
  `CRM_Concession_Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Feedback_Detail_StallNo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Feedback_Detail_Stall_Area` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_sender_type`
--

CREATE TABLE `crm_sender_type` (
  `CRM_Feedback_Sender_SerialNo` int(11) NOT NULL,
  `CRM_Sender_Type_SerialNo_FK` int(11) NOT NULL,
  `CRM_Feedback_Sender_Type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_sender_type_employee_detail`
--

CREATE TABLE `crm_sender_type_employee_detail` (
  `CRM_Sender_Type_SerialNo` int(11) NOT NULL,
  `CRM_Sender_Type_Sender_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_EmployeeNo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_Contact` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_sender_type_faculty_detail`
--

CREATE TABLE `crm_sender_type_faculty_detail` (
  `CRM_Sender_Type_SerialNo` int(11) NOT NULL,
  `CRM_Sender_Type_Sender_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_facultyNo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_Contact` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_sender_type_others_detail`
--

CREATE TABLE `crm_sender_type_others_detail` (
  `CRM_Sender_Type_SerialNo` int(11) NOT NULL,
  `CRM_Sender_Type_Sender_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_Specify` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_Contact` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_sender_type_student_detail`
--

CREATE TABLE `crm_sender_type_student_detail` (
  `CRM_Sender_Type_SerialNo` int(11) NOT NULL,
  `CRM_Sender_Type_Sender_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_StudentNo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Sender_Type_Contact` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_tasklist`
--

CREATE TABLE `crm_tasklist` (
  `CRM_Task_SerialNo` int(11) NOT NULL,
  `CRM_Task_Case_SerialNo_FK` int(11) NOT NULL,
  `CRM_Task_Login_SerialNo_FK` int(11) NOT NULL,
  `CRM_Task_Status_Type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Task_Assigned_UserName` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Task_Priority_Type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Task_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Task_Case_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_Start_Date` date NOT NULL,
  `CRM_Due_Date` date NOT NULL,
  `CRM_Task_Description` varchar(6000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRM_isArchived` int(1) NOT NULL,
  `CRM_Task_Has_attachments` int(1) NOT NULL,
  `CRM_Tasklist_Dated_Added` date NOT NULL,
  `CRM_Tasklist_Date_Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crm_activitylist`
--
ALTER TABLE `crm_activitylist`
  ADD PRIMARY KEY (`CRM_ Activity_SerialNo`),
  ADD KEY `activity_calendar_fk` (`CRM_ Activity_Callendar_SerialNo_FK`),
  ADD KEY `activity_task_fk` (`CRM_Activity_Task_SerialNo_FK`),
  ADD KEY `activity_login_fk` (`CRM_Activitylist_Login_SerialNo_FK`);

--
-- Indexes for table `crm_admin_contact_details`
--
ALTER TABLE `crm_admin_contact_details`
  ADD PRIMARY KEY (`CRM_Contact_Detail_SerialNo`),
  ADD KEY `user_contact_fk` (`CRM_User_Contact_Detail_FK`),
  ADD KEY `contact_login_fk` (`CRM_Contact_Login_FK`);

--
-- Indexes for table `crm_admin_user_details`
--
ALTER TABLE `crm_admin_user_details`
  ADD PRIMARY KEY (`CRM_User_Detail_SerialNo`),
  ADD KEY `CRM_User_Login_SerialNo_FK` (`CRM_User_Login_SerialNo_FK`);

--
-- Indexes for table `crm_admin_user_general_permissions`
--
ALTER TABLE `crm_admin_user_general_permissions`
  ADD PRIMARY KEY (`CRM_User_Permission_SerialNo`),
  ADD KEY `permission_role_fk` (`CRM_User_Permission_Role_SerialNo_FK`),
  ADD KEY `permission_login_fk` (`CRM_General_Permission_Login_SerialNo_FK`);

--
-- Indexes for table `crm_admin_user_login`
--
ALTER TABLE `crm_admin_user_login`
  ADD PRIMARY KEY (`CRM_User_Login_SerialNo`),
  ADD KEY `login_fk` (`CRM_Login_fk`);

--
-- Indexes for table `crm_admin_user_module_permissions`
--
ALTER TABLE `crm_admin_user_module_permissions`
  ADD PRIMARY KEY (`CRM_User_Module_Permission_SerialNo`),
  ADD KEY `module_general_permission_fk` (`CRM_User_Module_Permission_SerialNo_FK`),
  ADD KEY `module_role_fk` (`CRM_User_Module_Role_SerialNo_FK`),
  ADD KEY `module_login_fk` (`CRM_Module_Login_SerialNo_FK`);

--
-- Indexes for table `crm_admin_user_role`
--
ALTER TABLE `crm_admin_user_role`
  ADD PRIMARY KEY (`CRM_User_Role_SerialNo`),
  ADD KEY `user_login_fk` (`CRM_User_Login_SerialNo_FK`);

--
-- Indexes for table `crm_audit_trail`
--
ALTER TABLE `crm_audit_trail`
  ADD PRIMARY KEY (`CRM_Audit_Trail_SerialNo`),
  ADD KEY `trail_userdetail_fk` (`CRM_Audit_Trail_User_Detail_SerialNo_FK`),
  ADD KEY `trail_role_fk` (`CRM_Audit_Trail_User_Role_SerialNo_FK`);

--
-- Indexes for table `crm_calendarlist`
--
ALTER TABLE `crm_calendarlist`
  ADD PRIMARY KEY (`CRM_Callendar_SerialNo`),
  ADD KEY `login_calendar` (`CRM_Calendarlist_Login_SerialNo_FK`);

--
-- Indexes for table `crm_caselist`
--
ALTER TABLE `crm_caselist`
  ADD PRIMARY KEY (`CRM_Case_SerialNo`),
  ADD KEY `case_login_fk` (`CRM_Case_Login_SerialNo_FK`);

--
-- Indexes for table `crm_concession_contact`
--
ALTER TABLE `crm_concession_contact`
  ADD PRIMARY KEY (`CRM_Concession_Contact_SerialNo`),
  ADD KEY `profile_contact_fk` (`CRM_Profile_Contact_SerialNo_FK`),
  ADD KEY `login_contact_fk` (`CRM_Contact_Login_SerialNo_FK`);

--
-- Indexes for table `crm_concession_contract`
--
ALTER TABLE `crm_concession_contract`
  ADD PRIMARY KEY (`CRM_Concession_Contract_SerialNo`),
  ADD KEY `profile_contract_fk` (`CRM_Concession_Contract_Profile_SerialNo_FK`),
  ADD KEY `login_contract_fk` (`CRM_Concession_Contract_Login_SerialNo_FK`);

--
-- Indexes for table `crm_concession_equipment`
--
ALTER TABLE `crm_concession_equipment`
  ADD PRIMARY KEY (`CRM_Concession_Equipment_SerialNo`),
  ADD KEY `profile_equipment_fk` (`CRM_Concession_Equipment_Profile_SerialNo_FK`),
  ADD KEY `login_equipment` (`CRM_Concession_Equipment_Login_SerialNo_FK`);

--
-- Indexes for table `crm_concession_experience`
--
ALTER TABLE `crm_concession_experience`
  ADD PRIMARY KEY (`CRM_Concession_Experience_SerialNo`),
  ADD KEY `experience_profile_fk` (`CRM_Concession_Experience_Profile_SerialNo_FK`),
  ADD KEY `login_experience_fk` (`CRM_Concession_Experience_Login_SerialNo_FK`);

--
-- Indexes for table `crm_concession_food_items`
--
ALTER TABLE `crm_concession_food_items`
  ADD PRIMARY KEY (`CRM_Concession_Food_Item_SerialNo`),
  ADD KEY `profile_food_fk` (`CRM_Profile_Food_SerialNo_FK`),
  ADD KEY `login_food_fk` (`CRM_Concession_Food_Login_SerialNo_FK`);

--
-- Indexes for table `crm_concession_other_items`
--
ALTER TABLE `crm_concession_other_items`
  ADD PRIMARY KEY (`CRM_Concession_Other_Items_SerialNo`),
  ADD KEY `profile_other_fk` (`CRM_Other_Items_Profile_SerialNo_FK`),
  ADD KEY `login_other_fk` (`CRM_Concession_Other_Login_SerialNo_FK`);

--
-- Indexes for table `crm_concession_profile`
--
ALTER TABLE `crm_concession_profile`
  ADD PRIMARY KEY (`CRM_Concession_Profile_SerialNo`),
  ADD KEY `login_profile_fk` (`CRM_Profile_Login_SerialNo_FK`);

--
-- Indexes for table `crm_concession_requirements`
--
ALTER TABLE `crm_concession_requirements`
  ADD PRIMARY KEY (`CRM_Concession_Requirements_SerialNo`),
  ADD KEY `login_equipment_fk` (`CRM_Concession_Requirements_Login_SerialNo_FK`);

--
-- Indexes for table `crm_concession_school_items`
--
ALTER TABLE `crm_concession_school_items`
  ADD PRIMARY KEY (`CRM_Concession_Items_SerialNo`),
  ADD KEY `login_shool_item_fk` (`CRM_Concession_School_Item_Login_SerialNo_FK`),
  ADD KEY `profile_school_item_fk` (`CRM_Items_Profile_SerialNo_FK`);

--
-- Indexes for table `crm_concession_services`
--
ALTER TABLE `crm_concession_services`
  ADD PRIMARY KEY (`CRM_Concession_Services_SerialNo`),
  ADD KEY `profile_services_fk` (`CRM_Services_Profile_SerialNo_FK`),
  ADD KEY `login_services_fk` (`CRM_Concession_Services_Login_SerialNo_FK`);

--
-- Indexes for table `crm_feedback`
--
ALTER TABLE `crm_feedback`
  ADD PRIMARY KEY (`CRM_Feedback_SerialNo`);

--
-- Indexes for table `crm_feedback_detail`
--
ALTER TABLE `crm_feedback_detail`
  ADD PRIMARY KEY (`CRM_Feedback_Detail_SerialNo`),
  ADD KEY `profile_feedback_detail_fk` (`CRM_Feedback_Detail_Profile_SerialNo_FK`),
  ADD KEY `sender_feedback_detail_fk` (`CRM_Feedback_Sender_SerialNo_FK`),
  ADD KEY `feedback_feedback_detail_fk` (`CRM_Feedback_SerialNo_FK`);

--
-- Indexes for table `crm_sender_type`
--
ALTER TABLE `crm_sender_type`
  ADD PRIMARY KEY (`CRM_Feedback_Sender_SerialNo`),
  ADD KEY `other_sender_type_fk` (`CRM_Sender_Type_SerialNo_FK`);

--
-- Indexes for table `crm_sender_type_employee_detail`
--
ALTER TABLE `crm_sender_type_employee_detail`
  ADD PRIMARY KEY (`CRM_Sender_Type_SerialNo`);

--
-- Indexes for table `crm_sender_type_faculty_detail`
--
ALTER TABLE `crm_sender_type_faculty_detail`
  ADD PRIMARY KEY (`CRM_Sender_Type_SerialNo`);

--
-- Indexes for table `crm_sender_type_others_detail`
--
ALTER TABLE `crm_sender_type_others_detail`
  ADD PRIMARY KEY (`CRM_Sender_Type_SerialNo`);

--
-- Indexes for table `crm_sender_type_student_detail`
--
ALTER TABLE `crm_sender_type_student_detail`
  ADD PRIMARY KEY (`CRM_Sender_Type_SerialNo`);

--
-- Indexes for table `crm_tasklist`
--
ALTER TABLE `crm_tasklist`
  ADD PRIMARY KEY (`CRM_Task_SerialNo`),
  ADD KEY `login_task_fk` (`CRM_Task_Login_SerialNo_FK`),
  ADD KEY `case_task_fk` (`CRM_Task_Case_SerialNo_FK`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crm_activitylist`
--
ALTER TABLE `crm_activitylist`
  ADD CONSTRAINT `activity_calendar_fk` FOREIGN KEY (`CRM_ Activity_Callendar_SerialNo_FK`) REFERENCES `crm_calendarlist` (`CRM_Callendar_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activity_login_fk` FOREIGN KEY (`CRM_Activitylist_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `activity_task_fk` FOREIGN KEY (`CRM_Activity_Task_SerialNo_FK`) REFERENCES `crm_tasklist` (`CRM_Task_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_admin_contact_details`
--
ALTER TABLE `crm_admin_contact_details`
  ADD CONSTRAINT `contact_login_fk` FOREIGN KEY (`CRM_Contact_Login_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_user_fk` FOREIGN KEY (`CRM_User_Contact_Detail_FK`) REFERENCES `crm_admin_user_details` (`CRM_User_Detail_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_admin_user_details`
--
ALTER TABLE `crm_admin_user_details`
  ADD CONSTRAINT `crm_admin_user_details_ibfk_1` FOREIGN KEY (`CRM_User_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`);

--
-- Constraints for table `crm_admin_user_general_permissions`
--
ALTER TABLE `crm_admin_user_general_permissions`
  ADD CONSTRAINT `permission_login_fk` FOREIGN KEY (`CRM_General_Permission_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_fk` FOREIGN KEY (`CRM_User_Permission_Role_SerialNo_FK`) REFERENCES `crm_admin_user_module_permissions` (`CRM_User_Module_Permission_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_admin_user_login`
--
ALTER TABLE `crm_admin_user_login`
  ADD CONSTRAINT `login_fk` FOREIGN KEY (`CRM_Login_fk`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `crm_admin_user_module_permissions`
--
ALTER TABLE `crm_admin_user_module_permissions`
  ADD CONSTRAINT `module_general_permission_fk` FOREIGN KEY (`CRM_User_Module_Permission_SerialNo_FK`) REFERENCES `crm_admin_user_general_permissions` (`CRM_User_Permission_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `module_login_fk` FOREIGN KEY (`CRM_Module_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `module_role_fk` FOREIGN KEY (`CRM_User_Module_Role_SerialNo_FK`) REFERENCES `crm_admin_user_role` (`CRM_User_Role_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_admin_user_role`
--
ALTER TABLE `crm_admin_user_role`
  ADD CONSTRAINT `user_login_fk` FOREIGN KEY (`CRM_User_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_audit_trail`
--
ALTER TABLE `crm_audit_trail`
  ADD CONSTRAINT `trail_role_fk` FOREIGN KEY (`CRM_Audit_Trail_User_Role_SerialNo_FK`) REFERENCES `crm_admin_user_role` (`CRM_User_Role_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trail_userdetail_fk` FOREIGN KEY (`CRM_Audit_Trail_User_Detail_SerialNo_FK`) REFERENCES `crm_admin_user_details` (`CRM_User_Detail_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_calendarlist`
--
ALTER TABLE `crm_calendarlist`
  ADD CONSTRAINT `login_calendar` FOREIGN KEY (`CRM_Calendarlist_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_caselist`
--
ALTER TABLE `crm_caselist`
  ADD CONSTRAINT `case_login_fk` FOREIGN KEY (`CRM_Case_Login_SerialNo_FK`) REFERENCES `crm_caselist` (`CRM_Case_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_concession_contact`
--
ALTER TABLE `crm_concession_contact`
  ADD CONSTRAINT `login_contact_fk` FOREIGN KEY (`CRM_Contact_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_contact_fk` FOREIGN KEY (`CRM_Profile_Contact_SerialNo_FK`) REFERENCES `crm_concession_profile` (`CRM_Concession_Profile_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_concession_contract`
--
ALTER TABLE `crm_concession_contract`
  ADD CONSTRAINT `login_contract_fk` FOREIGN KEY (`CRM_Concession_Contract_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_contract_fk` FOREIGN KEY (`CRM_Concession_Contract_Profile_SerialNo_FK`) REFERENCES `crm_concession_profile` (`CRM_Concession_Profile_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_concession_equipment`
--
ALTER TABLE `crm_concession_equipment`
  ADD CONSTRAINT `login_equipment` FOREIGN KEY (`CRM_Concession_Equipment_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_equipment_fk` FOREIGN KEY (`CRM_Concession_Equipment_Profile_SerialNo_FK`) REFERENCES `crm_concession_profile` (`CRM_Concession_Profile_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_concession_experience`
--
ALTER TABLE `crm_concession_experience`
  ADD CONSTRAINT `experience_profile_fk` FOREIGN KEY (`CRM_Concession_Experience_Profile_SerialNo_FK`) REFERENCES `crm_concession_profile` (`CRM_Concession_Profile_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `login_experience_fk` FOREIGN KEY (`CRM_Concession_Experience_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `crm_concession_food_items`
--
ALTER TABLE `crm_concession_food_items`
  ADD CONSTRAINT `login_food_fk` FOREIGN KEY (`CRM_Concession_Food_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_food_fk` FOREIGN KEY (`CRM_Profile_Food_SerialNo_FK`) REFERENCES `crm_concession_profile` (`CRM_Concession_Profile_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_concession_other_items`
--
ALTER TABLE `crm_concession_other_items`
  ADD CONSTRAINT `login_other_fk` FOREIGN KEY (`CRM_Concession_Other_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_other_fk` FOREIGN KEY (`CRM_Other_Items_Profile_SerialNo_FK`) REFERENCES `crm_concession_profile` (`CRM_Concession_Profile_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_concession_profile`
--
ALTER TABLE `crm_concession_profile`
  ADD CONSTRAINT `login_profile_fk` FOREIGN KEY (`CRM_Profile_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `crm_concession_requirements`
--
ALTER TABLE `crm_concession_requirements`
  ADD CONSTRAINT `login_equipment_fk` FOREIGN KEY (`CRM_Concession_Requirements_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `crm_concession_school_items`
--
ALTER TABLE `crm_concession_school_items`
  ADD CONSTRAINT `login_shool_item_fk` FOREIGN KEY (`CRM_Concession_School_Item_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_school_item_fk` FOREIGN KEY (`CRM_Items_Profile_SerialNo_FK`) REFERENCES `crm_concession_profile` (`CRM_Concession_Profile_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_concession_services`
--
ALTER TABLE `crm_concession_services`
  ADD CONSTRAINT `login_services_fk` FOREIGN KEY (`CRM_Concession_Services_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_services_fk` FOREIGN KEY (`CRM_Services_Profile_SerialNo_FK`) REFERENCES `crm_concession_profile` (`CRM_Concession_Profile_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_feedback_detail`
--
ALTER TABLE `crm_feedback_detail`
  ADD CONSTRAINT `feedback_feedback_detail_fk` FOREIGN KEY (`CRM_Feedback_SerialNo_FK`) REFERENCES `crm_feedback` (`CRM_Feedback_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_feedback_detail_fk` FOREIGN KEY (`CRM_Feedback_Detail_Profile_SerialNo_FK`) REFERENCES `crm_concession_profile` (`CRM_Concession_Profile_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sender_feedback_detail_fk` FOREIGN KEY (`CRM_Feedback_Sender_SerialNo_FK`) REFERENCES `crm_sender_type` (`CRM_Feedback_Sender_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_sender_type`
--
ALTER TABLE `crm_sender_type`
  ADD CONSTRAINT `employee_sender_type_fk` FOREIGN KEY (`CRM_Sender_Type_SerialNo_FK`) REFERENCES `crm_sender_type_employee_detail` (`CRM_Sender_Type_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_sender_type_fk` FOREIGN KEY (`CRM_Sender_Type_SerialNo_FK`) REFERENCES `crm_sender_type_faculty_detail` (`CRM_Sender_Type_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `other_sender_type_fk` FOREIGN KEY (`CRM_Sender_Type_SerialNo_FK`) REFERENCES `crm_sender_type_others_detail` (`CRM_Sender_Type_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_sender_type_fk` FOREIGN KEY (`CRM_Sender_Type_SerialNo_FK`) REFERENCES `crm_sender_type_student_detail` (`CRM_Sender_Type_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_tasklist`
--
ALTER TABLE `crm_tasklist`
  ADD CONSTRAINT `case_task_fk` FOREIGN KEY (`CRM_Task_Case_SerialNo_FK`) REFERENCES `crm_caselist` (`CRM_Case_SerialNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `login_task_fk` FOREIGN KEY (`CRM_Task_Login_SerialNo_FK`) REFERENCES `crm_admin_user_login` (`CRM_User_Login_SerialNo`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
