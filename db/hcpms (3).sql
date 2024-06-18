-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 02:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `middlename`, `lastname`) VALUES
(5, 'admin', 'admin', 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `birthing`
--

CREATE TABLE `birthing` (
  `birth_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `chief_complaint` varchar(100) NOT NULL,
  `history` varchar(100) NOT NULL,
  `lmp` varchar(15) NOT NULL,
  `edc` varchar(15) NOT NULL,
  `aog` varchar(15) NOT NULL,
  `G` varchar(15) NOT NULL,
  `P` varchar(15) NOT NULL,
  `1` varchar(15) NOT NULL,
  `2` varchar(15) NOT NULL,
  `3` varchar(15) NOT NULL,
  `4` varchar(15) NOT NULL,
  `bp1` varchar(15) NOT NULL,
  `bp2` varchar(15) NOT NULL,
  `pr` varchar(15) NOT NULL,
  `rr` varchar(15) NOT NULL,
  `T` varchar(15) NOT NULL,
  `head_neck` varchar(15) NOT NULL,
  `chest` varchar(15) NOT NULL,
  `heart` varchar(15) NOT NULL,
  `abdomen` varchar(15) NOT NULL,
  `fhb` varchar(15) NOT NULL,
  `loc` varchar(15) NOT NULL,
  `extremities` varchar(15) NOT NULL,
  `vulva` varchar(15) NOT NULL,
  `vagina` varchar(15) NOT NULL,
  `cervix` varchar(15) NOT NULL,
  `uterus` varchar(15) NOT NULL,
  `bow` varchar(15) NOT NULL,
  `presentation` varchar(15) NOT NULL,
  `vaginal_discharge` varchar(15) NOT NULL,
  `staff` varchar(30) NOT NULL,
  `itr_no` varchar(4) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cancelappointment`
--

CREATE TABLE `cancelappointment` (
  `Sample` varchar(20) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `com_id` int(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `complaints` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `itr_no` varchar(50) NOT NULL,
  `section` varchar(20) NOT NULL,
  `ass` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `rx` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`com_id`, `date`, `complaints`, `remark`, `itr_no`, `section`, `ass`, `plan`, `rx`, `status`) VALUES
(1, '08/04/2023', 'wewe', 'ewe', '1', 'Dental', '', '', '', 'Done'),
(2, '10/08/2023', 'ffluifykgui', '', '2', 'Dental', '', '', '', 'Done'),
(3, '10/12/2023', 'you1wdiohwe;oidj', 'wfqkwjednlkwe', '', 'Dental', '', '', '', 'Done'),
(4, '10/12/2023', 'wefqwe', 'whwl', '3', 'Dental', '', '', '', 'Done'),
(5, '11/09/2023', '', '', '', 'Xray', '', '', '', 'Pending'),
(6, '11/10/2023', 'ndclancsasdsf', 'dsfvfdgbd', '2', 'Rehabilitation', '', '', '', 'Done'),
(7, '11/10/2023', 'dfgihvjoaihdfi', 'wkjfwopfjwioep', '4', 'Rehabilitation', '', '', '', 'Done'),
(8, '11/10/2023', 'kaso;ne;cwec', 'sduhqjoldjqwouxq', '4', 'Rehabilitation', '', '', '', 'Done'),
(9, '11/10/2023', 'wbvnoidcnai', 'asoicuanicsnc', '5', 'Fecalysis', '', '', '', 'Done'),
(10, '11/16/2023', 'Ansakit so ngipen', 'Pangal', '1231', 'Dental', '', '', '', 'Done'),
(11, '11/18/2023', 'Taena kailangan yung rehab pero pinapatanggal sa amin hahahaha paano ako maaadik niyan sayo :)))', '', '3', 'Dental', '', '', '', 'Pending'),
(12, '03/18/2024', 'Tooth ache', 'antibiotics', '6', 'Dental', '', '', '', 'Done'),
(13, '03/18/2024', 'rrsfc', 'tooth ache', '6', 'Dental', '', '', '', 'Pending'),
(14, '03/18/2024', 'skvjs', '12345', '6', 'Fecalysis', '', '', '', 'Pending'),
(15, '03/31/2024', 'masakit tiyan', 'surgery', '89', 'Fecalysis', '', '', '', 'Pending'),
(16, '04/02/2024', 'vfs', 'medical', '1', 'Fecalysis', '', '', '', 'Done'),
(17, '04/03/2024', 'masakit pag umihi', 'medical', '1', 'Urinalysis', '', '', '', 'Done'),
(18, '04/03/2024', 'masakit pag umihi', 'select', '100', 'Urinalysis', '', '', '', 'Pending'),
(19, '04/03/2024', 'teeth', 'select', '1', 'Dental', '', '', '', 'Done'),
(20, '04/03/2024', 'Madalas ubuhin', 'medical', '1', 'Sputum', '', '', '', 'Done'),
(21, '04/03/2024', 'Bruises', 'medical', '1', 'Hematology', '', '', '', 'Done'),
(22, '04/03/2024', 'Stomach Ache', 'medical', '1', 'Fecalysis', '', '', '', 'Done'),
(23, '04/04/2024', 'I am writing to express my dissatisfaction with the analysis of my recent sputum sample. Despite providing the sample as requested, I have not received any feedback or results regarding its analysis, which is causing me significant concern and frustration', 'medical', '12', 'Sputum', '', '', '', 'Pending'),
(24, '04/04/2024', 'My lateral incisor in my teeth really hurts, it makes me feel nauseous', 'dental', '10', 'Dental', '', '', '', 'Pending'),
(25, '04/16/2024', '', 'medical', '1', 'Dental', '', '', '', 'Pending'),
(26, '04/16/2024', '', 'dental', '1', 'Dental', '', '', '', 'Pending'),
(27, '04/16/2024', 'as', 'as', '', 'Dental', '', '', '', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `dental`
--

CREATE TABLE `dental` (
  `dental_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `dentist` varchar(30) NOT NULL,
  `tooth` int(3) NOT NULL,
  `itr_no` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dental`
--

INSERT INTO `dental` (`dental_no`, `date`, `dentist`, `tooth`, `itr_no`, `user_id`, `month`, `year`) VALUES
(6, '2024-04-03', 'Dr. Evangeline Martinez', 2, '1', 11, 'Apr', '2024'),
(7, '2024-04-04', 'Dr. Evangeline Martinez', 2, '2', 11, 'Apr', '2024'),
(8, '2024-04-16', 'Dr. Evangeline Martinez', 12, '', 11, 'Apr', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `fecalisys`
--

CREATE TABLE `fecalisys` (
  `fecalisys_id` int(11) NOT NULL,
  `date_of_request` date NOT NULL,
  `requested_by` varchar(30) NOT NULL,
  `color` varchar(15) NOT NULL,
  `consistency` varchar(15) NOT NULL,
  `pus_cells` varchar(15) NOT NULL,
  `RBC` varchar(15) NOT NULL,
  `fat_globules` varchar(15) NOT NULL,
  `occult_blood` varchar(15) NOT NULL,
  `others_chem` varchar(15) NOT NULL,
  `ova` varchar(15) NOT NULL,
  `larva` varchar(15) NOT NULL,
  `adult_forms` varchar(15) NOT NULL,
  `cyst` varchar(15) NOT NULL,
  `trophozoites` varchar(15) NOT NULL,
  `others_pro` varchar(15) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `date_reported` date NOT NULL,
  `pathologist` varchar(30) NOT NULL,
  `medical_technologist` varchar(30) NOT NULL,
  `itr_no` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fecalisys`
--

INSERT INTO `fecalisys` (`fecalisys_id`, `date_of_request`, `requested_by`, `color`, `consistency`, `pus_cells`, `RBC`, `fat_globules`, `occult_blood`, `others_chem`, `ova`, `larva`, `adult_forms`, `cyst`, `trophozoites`, `others_pro`, `remarks`, `date_reported`, `pathologist`, `medical_technologist`, `itr_no`, `user_id`, `month`, `year`) VALUES
(1, '2023-11-10', 'Trial 1', 'red', 'dnovs', 'ascad', 'dcad', 'adcadc', 'ascadc', '', 'acad', 'dsvsddcsdcdsdsc', 'dvfdvadddcad', 'adcad', 'dcsdc', '', 'dcuvbIAUHdooia', '2023-11-10', 'a;jklbsdclan', 'acklbna;onc', '5', 8, 'Nov', '2023'),
(2, '2024-04-02', 'Jenet Trinidad', 'yellow', 'Clear', '3.8', '4.6', '6.8', 'none', '', '4', 'none', 'none', 'none', 'none', '', 'Upset Stomach', '2024-04-03', 'Jenet Trinidad', 'Jenet Trinidad', '1', 12, 'Apr', '2024'),
(3, '2024-04-03', 'Jenet Trinidad', 'yellow', 'Clear', '3.8', '4.6', '6.8', 'none', '', '4', 'none', 'none', 'none', 'none', '', '', '2024-04-04', 'Jenet Trinidad', 'Jenet Trinidad', '1', 12, 'Apr', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `hematology`
--

CREATE TABLE `hematology` (
  `hem_id` int(11) NOT NULL,
  `date_requested` date NOT NULL,
  `requested_by` varchar(30) NOT NULL,
  `hemoglobin` varchar(15) NOT NULL,
  `hematocrit` varchar(15) NOT NULL,
  `RBC_count` varchar(15) NOT NULL,
  `WBC_count` varchar(15) NOT NULL,
  `platelet` varchar(15) NOT NULL,
  `bleeding_time` varchar(15) NOT NULL,
  `clotting_time` varchar(15) NOT NULL,
  `neutrophil` varchar(15) NOT NULL,
  `segmenters` varchar(15) NOT NULL,
  `stabs` varchar(15) NOT NULL,
  `lymphocytes` varchar(15) NOT NULL,
  `monocyte` varchar(15) NOT NULL,
  `eosinophil` varchar(15) NOT NULL,
  `basophil` varchar(15) NOT NULL,
  `total` varchar(15) NOT NULL,
  `ABO_group` varchar(15) NOT NULL,
  `Rh_group` varchar(15) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `pathologist` varchar(30) NOT NULL,
  `medical_technologist` varchar(30) NOT NULL,
  `itr_no` varchar(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hematology`
--

INSERT INTO `hematology` (`hem_id`, `date_requested`, `requested_by`, `hemoglobin`, `hematocrit`, `RBC_count`, `WBC_count`, `platelet`, `bleeding_time`, `clotting_time`, `neutrophil`, `segmenters`, `stabs`, `lymphocytes`, `monocyte`, `eosinophil`, `basophil`, `total`, `ABO_group`, `Rh_group`, `remarks`, `pathologist`, `medical_technologist`, `itr_no`, `user_id`, `month`, `year`) VALUES
(1, '2024-04-03', 'Jenet Trinidad', '130-180', '10-54', '4.5-6.2', '11.0', '160', '3min', '3', '55', '4', 'none', '25', '4', '3', '1', '8', 'o+', 'o+', 'Anemia', 'Jenet Trinidad', 'Jenet Trinidad', '1', 8, 'Apr', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `itr`
--

CREATE TABLE `itr` (
  `itr_no` varchar(4) NOT NULL,
  `family_no` varchar(6) NOT NULL,
  `phil_health_no` varchar(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(30) NOT NULL,
  `civil_status` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `BP` varchar(10) NOT NULL,
  `TEMP` varchar(10) NOT NULL,
  `PR` varchar(10) NOT NULL,
  `RR` varchar(10) NOT NULL,
  `WT` varchar(10) NOT NULL,
  `HT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `itr`
--

INSERT INTO `itr` (`itr_no`, `family_no`, `phil_health_no`, `firstname`, `middlename`, `lastname`, `birthdate`, `age`, `address`, `civil_status`, `gender`, `BP`, `TEMP`, `PR`, `RR`, `WT`, `HT`) VALUES
('', '', '', 'mcmc', 'Marinas', 'Palisoc', '07/14/2002', 12, 'Urbiz', 'Single', 'Male', '', '', '', '', '', ''),
('1', '', '', 'Erwin', 'Ferrer', 'Nombre', '08/24/2002', 21, 'Basista', 'Single', 'Male', '80/90', '38', '60', '45', '74', '174'),
('10', '', '', 'McLeopher', 'Camorongan', 'De Guzman', '09/28/2002', 21, 'Beleng', 'Single', 'Male', '', '', '', '', '', ''),
('11', '', '', 'Marfael ', 'Garcia', 'Gural', '03/20/2001', 22, 'Anambongan', 'Single', 'Male', '', '', '', '', '', ''),
('12', '', '', 'Arjay', 'Telesforo', 'Frias', '04/1/2001', 22, 'Bega', 'Married', 'Male', '', '', '', '', '', ''),
('13', '', '', 'Brian Edison', 'Frias', 'Nunez', '03/1/2002', 21, 'Basista', 'Single', 'Male', '', '', '', '', '', ''),
('14', '', '', 'Jester', 'Suarez', 'Mabini', '11/5/2002', 22, 'Basista', 'Single', 'Male', '', '', '', '', '', ''),
('15', '', '', 'Jenet', '', 'Rosario', '01/27/2001', 22, 'Urbiztondo', 'Single', 'Male', '', '', '', '', '', ''),
('2', '', '', 'Edison', 'Marinas', 'Palisoc', '07/14/2002', 21, 'Urbiz', 'Single', 'Male', '', '', '', '', '', ''),
('3', '', '', 'Mark Winchester', 'Camacho', 'Bautista', '09/2/2001', 22, 'Calobaoan', 'Single', 'Male', '', '', '', '', '', ''),
('4', '', '', 'John Paolo', 'Frias', 'Badiang', '03/26/2002', 21, 'Navatat', 'Single', 'Male', '', '', '', '', '', ''),
('5', '', '', 'Vlaudemer', 'Soriano', 'Sarmiento', '03/21/2002', 21, 'Patacbo', 'Single', 'Male', '', '', '', '', '', ''),
('6', '', '', 'Joshua', 'Doria', 'Ursua', '07/16/2002', 21, 'Navatat', 'Single', 'Male', '', '', '', '', '', ''),
('7', '', '', 'Reggie ', 'Sambajon', 'Ferrer', '11/6/2002', 21, 'Cobol', 'Single', 'Male', '', '', '', '', '', ''),
('8', '', '', 'Christian', 'Mendoza', 'Mandapat', '03/27/2001', 22, 'Quezon', 'Single', 'Male', '', '', '', '', '', ''),
('9', '', '', 'Jonathan', 'Idos', 'De Guzman', '10/11/2002', 21, 'Dumpay', 'Single', 'Male', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `maternity_patient`
--

CREATE TABLE `maternity_patient` (
  `patient_id` int(50) NOT NULL,
  `case_no` varchar(20) NOT NULL,
  `nhts` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `philhealth` varchar(30) NOT NULL,
  `pat_firstname` varchar(30) NOT NULL,
  `pat_middlename` varchar(30) NOT NULL,
  `pat_lastname` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `date_of_admission` varchar(20) NOT NULL,
  `time_of_admission` varchar(20) NOT NULL,
  `spouse_firstname` varchar(30) NOT NULL,
  `spouse_middlename` varchar(30) NOT NULL,
  `spouse_lastname` varchar(30) NOT NULL,
  `spouse_age` int(10) NOT NULL,
  `spouse_religion` varchar(30) NOT NULL,
  `spouse_occupation` varchar(30) NOT NULL,
  `G` varchar(20) NOT NULL,
  `T` varchar(20) NOT NULL,
  `A` varchar(20) NOT NULL,
  `L` varchar(20) NOT NULL,
  `lmp` varchar(20) NOT NULL,
  `edc` varchar(20) NOT NULL,
  `aog` varchar(20) NOT NULL,
  `fetal_position` varchar(20) NOT NULL,
  `fh` varchar(20) NOT NULL,
  `fhb` varchar(20) NOT NULL,
  `loc` varchar(20) NOT NULL,
  `admitting_diagnose` varchar(100) NOT NULL,
  `midwife` varchar(50) NOT NULL,
  `date_of_delivery` varchar(20) NOT NULL,
  `time` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `wt` varchar(10) NOT NULL,
  `baby_firstname` varchar(30) NOT NULL,
  `baby_middlename` varchar(30) NOT NULL,
  `baby_lastname` varchar(30) NOT NULL,
  `hepa` varchar(30) NOT NULL,
  `bcg` varchar(30) NOT NULL,
  `nbs` varchar(30) NOT NULL,
  `date_of_discharge` varchar(30) NOT NULL,
  `time_of_discharge` varchar(30) NOT NULL,
  `final_diagnosis` varchar(100) NOT NULL,
  `disposition_on_charge` varchar(50) NOT NULL,
  `itr_no` varchar(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `first_name`, `middle_name`, `last_name`, `email`, `password`, `phone_number`, `date_time`) VALUES
(1, 'test5', 'test5', 'test5', 'test5@gmail.com', '$2y$10$hnSglcoThdK19EXvTAxYIOhMxFZoqmRRboz7xMYvpfsDbKaXeCjZi', '+639632160886', '2024-06-18 18:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `info_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`info_id`, `first_name`, `middle_name`, `last_name`, `birthdate`, `address`, `civil_status`, `age`, `gender`, `event_date`, `date_time`) VALUES
(11, 'test5', 'test5', 'test5', '2018-06-07', 'Urbiz', 'Married', 6, 'Male', '2024-06-18', '2024-06-18 20:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `prenatal`
--

CREATE TABLE `prenatal` (
  `prenatal_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `chief_complaint` varchar(100) NOT NULL,
  `attending_physician` varchar(30) NOT NULL,
  `lmp` varchar(20) NOT NULL,
  `ga_by_lmp` varchar(20) NOT NULL,
  `edc_by_lmp` varchar(20) NOT NULL,
  `fhr` varchar(20) NOT NULL,
  `ga_by_sonar` varchar(20) NOT NULL,
  `edc_by_utz` varchar(20) NOT NULL,
  `pregnancy_age` varchar(20) NOT NULL,
  `biparietal_diameter` varchar(20) NOT NULL,
  `biparietal_eq` varchar(20) NOT NULL,
  `head_circumference` varchar(20) NOT NULL,
  `head_circumference_eq` varchar(20) NOT NULL,
  `abdominal_circumference` varchar(20) NOT NULL,
  `abdominal_circumference_eq` varchar(20) NOT NULL,
  `femoral_length` varchar(20) NOT NULL,
  `femoral_length_eq` varchar(20) NOT NULL,
  `crown_rump_length` varchar(20) NOT NULL,
  `crown_rump_length_eq` varchar(20) NOT NULL,
  `mean_gest_sac_diameter` varchar(20) NOT NULL,
  `mean_gest_sac_diameter_eq` varchar(20) NOT NULL,
  `average_fetal_weight` varchar(20) NOT NULL,
  `gestation` varchar(20) NOT NULL,
  `presentation_lie` varchar(20) NOT NULL,
  `amniotic_fluid` varchar(20) NOT NULL,
  `placenta_location` varchar(20) NOT NULL,
  `previa` varchar(20) NOT NULL,
  `placenta_grade` varchar(20) NOT NULL,
  `fetal_activity` varchar(20) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `radiologist` varchar(30) NOT NULL,
  `itr_no` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `radiological`
--

CREATE TABLE `radiological` (
  `rad_id` int(11) NOT NULL,
  `case_no` varchar(12) NOT NULL,
  `referred_by` varchar(30) NOT NULL,
  `clinical_impression` varchar(100) NOT NULL,
  `room_bed_no` varchar(11) NOT NULL,
  `type_of_examination` varchar(30) NOT NULL,
  `date_taken` date NOT NULL,
  `radiologist` varchar(30) NOT NULL,
  `itr_no` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rehabilitation`
--

CREATE TABLE `rehabilitation` (
  `rehab_id` int(11) NOT NULL,
  `diagnosis` varchar(50) NOT NULL,
  `type_of_disability` varchar(50) NOT NULL,
  `subjective` varchar(100) NOT NULL,
  `objective` varchar(100) NOT NULL,
  `assessment` varchar(100) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `date` varchar(10) NOT NULL,
  `itr_no` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rehabilitation`
--

INSERT INTO `rehabilitation` (`rehab_id`, `diagnosis`, `type_of_disability`, `subjective`, `objective`, `assessment`, `plan`, `date`, `itr_no`, `user_id`, `month`, `year`) VALUES
(1, 'ghlkhl', 'bvcvkjlblbn', 'gcv,kjbl', 'hfcvb.lkh', 'gkugil', 'jfkg.;on.on', '11/10/2023', '4', 7, 'Nov', '2023'),
(2, 'oidscpoac', 'qwdboiqbdwq', 'dertrber', 'wfgretsrvsrfwrgtyr', 'rgetwr', 'wrgrthwrsgrwf', '11/10/2023', '4', 7, 'Nov', '2023'),
(3, 'hdfkkl', 'nghdfgkb', 'gxckjbjb', 'hdfklbnk', 'jfglhiuhlhn', 'jtfgkugigol', '11/10/2023', '2', 7, 'Nov', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `sputum`
--

CREATE TABLE `sputum` (
  `sputum_id` int(11) NOT NULL,
  `name_of_collection_unit` varchar(30) NOT NULL,
  `date_of_submission` date NOT NULL,
  `disease_classification` varchar(30) NOT NULL,
  `site` varchar(30) NOT NULL,
  `reason_for_examination` varchar(30) NOT NULL,
  `case_no` varchar(30) NOT NULL,
  `specimen1` varchar(30) NOT NULL,
  `specimen2` varchar(30) NOT NULL,
  `specimen3` varchar(30) NOT NULL,
  `date_of_collection1` date NOT NULL,
  `date_of_collection2` date NOT NULL,
  `date_of_collection3` date NOT NULL,
  `specimen_collector` varchar(30) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `lab_serial_no1` varchar(20) NOT NULL,
  `lab_serial_no2` varchar(20) NOT NULL,
  `lab_serial_no3` varchar(20) NOT NULL,
  `specimen_1` varchar(20) NOT NULL,
  `specimen_2` varchar(20) NOT NULL,
  `specimen_3` varchar(20) NOT NULL,
  `visual_appearance1` varchar(20) NOT NULL,
  `visual_appearance2` varchar(20) NOT NULL,
  `visual_appearance3` varchar(20) NOT NULL,
  `reading` varchar(20) NOT NULL,
  `date_of_examination` date NOT NULL,
  `examined_by` varchar(30) NOT NULL,
  `itr_no` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sputum`
--

INSERT INTO `sputum` (`sputum_id`, `name_of_collection_unit`, `date_of_submission`, `disease_classification`, `site`, `reason_for_examination`, `case_no`, `specimen1`, `specimen2`, `specimen3`, `date_of_collection1`, `date_of_collection2`, `date_of_collection3`, `specimen_collector`, `remarks`, `lab_serial_no1`, `lab_serial_no2`, `lab_serial_no3`, `specimen_1`, `specimen_2`, `specimen_3`, `visual_appearance1`, `visual_appearance2`, `visual_appearance3`, `reading`, `date_of_examination`, `examined_by`, `itr_no`, `user_id`, `month`, `year`) VALUES
(1, 'Jenet Trinidad', '2024-04-03', 'Pulmonary', '', 'Others', '0', '1', '2', '3', '2024-04-04', '2024-04-11', '2024-04-18', '', 'Clear', '123432', '1234324', '1234356', '1', '2', '3', 'clear', 'clear', 'clear', 'Clear of any disease', '2024-04-25', '', '1', 7, 'Apr', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `urinalysis`
--

CREATE TABLE `urinalysis` (
  `urinalysis_id` int(11) NOT NULL,
  `date_of_request` varchar(20) NOT NULL,
  `color` varchar(15) NOT NULL,
  `transparency` varchar(15) NOT NULL,
  `specific_gravity` varchar(15) NOT NULL,
  `ph` varchar(15) NOT NULL,
  `sugar` varchar(15) NOT NULL,
  `protein` varchar(15) NOT NULL,
  `pregnancy_test` varchar(15) NOT NULL,
  `pus_cells` varchar(15) NOT NULL,
  `rbc` varchar(15) NOT NULL,
  `cast` varchar(15) NOT NULL,
  `urates` varchar(15) NOT NULL,
  `uric_acid` varchar(15) NOT NULL,
  `cal_ox` varchar(15) NOT NULL,
  `epith_cells` varchar(15) NOT NULL,
  `mucus_threads` varchar(15) NOT NULL,
  `others` varchar(15) NOT NULL,
  `pathologist` varchar(30) NOT NULL,
  `medical_technologist` varchar(30) NOT NULL,
  `itr_no` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `urinalysis`
--

INSERT INTO `urinalysis` (`urinalysis_id`, `date_of_request`, `color`, `transparency`, `specific_gravity`, `ph`, `sugar`, `protein`, `pregnancy_test`, `pus_cells`, `rbc`, `cast`, `urates`, `uric_acid`, `cal_ox`, `epith_cells`, `mucus_threads`, `others`, `pathologist`, `medical_technologist`, `itr_no`, `user_id`, `month`, `year`) VALUES
(1, '04/03/2024', 'yellow', 'clear', 'medium', '1.3', '1.5', '2.3', 'negative', '3.8', '4.6', '2.5', 'clear', 'mid', 'clear', '', '', '', 'Evangeline Ramirez', 'Evangeline Ramirez', '1', 9, 'Apr', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `section`) VALUES
(7, 'Sputum', '12345', 'Jenet', '', 'Trinidad', 'Sputum'),
(8, 'Hematology', '12345', 'Jenet', '', 'Trinidad', 'Hematology'),
(9, 'Urinalysis', '12345', 'Evangeline', '', 'Ramirez', 'Urinalysis'),
(11, 'Dental', '12345', 'Dr. Evangeline', '', 'Ramirez', 'Dental'),
(12, 'fecalysis', '12345', 'Jenet', '', 'Trinidad', 'Fecalysis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `birthing`
--
ALTER TABLE `birthing`
  ADD PRIMARY KEY (`birth_id`);

--
-- Indexes for table `cancelappointment`
--
ALTER TABLE `cancelappointment`
  ADD PRIMARY KEY (`Sample`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
