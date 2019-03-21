<?php
include 'BasicEnum.php';

abstract class TypeProduct extends BasicEnum {
    const FullCoverage          = "Full Coverage";
    const LowCoverage           = "Low Coverage";
    const MediumCoverage        = "Medium Coverage";
    const MegaCoverage          = "Mega Coverage";
    const SpecialFullCoverage   = "Special Full Coverage";
    const SuperSale             = "Super Sale";
}