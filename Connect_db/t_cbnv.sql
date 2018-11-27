-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Jeu 04 Avril 2013 à 15:07
-- Version du serveur: 5.0.51
-- Version de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de données: `qlcbnv`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `t_cbnv`
-- 
create database db;
use db;
CREATE TABLE `t_cbnv` (
  `MaNV` varchar(6) collate utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(50) collate utf8_unicode_ci NOT NULL,
  `TenNV` varchar(50) collate utf8_unicode_ci NOT NULL,
  `TenCV` varchar(50) collate utf8_unicode_ci NOT NULL,
  `PhuCapCV` float NOT NULL,
  `Tien1ngay` float NOT NULL,
  `SoNgayLamViec` int(11) NOT NULL,
  PRIMARY KEY  (`MaNV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Contenu de la table `t_cbnv`
-- 

INSERT INTO `t_cbnv` VALUES ('GD123', 'hinhanh/1.jpg', 'Ngô Đông', 'Giám Đốc', 20000, 50000, 90);
INSERT INTO `t_cbnv` VALUES ('DD', 'hinhanh/2.jpg', 'không viết', 'nhân viên', 100000, 50000, 30);
INSERT INTO `t_cbnv` VALUES ('DDD123', 'hinhanh/3.jpg', 'không có', 'lao Công', 120000, 40000, 45);
select *from t_cbnv;

