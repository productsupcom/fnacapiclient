<?php

namespace FnacApiClient\Type;

/**
 * LogisticTypeId
 */
class LogisticTypeId extends AbstractType
{
    /**
     * Logistic type / Category A
     */
    const CATEGORY_A = '101';
    /**
     * Logistic type / Category B
     */
    const CATEGORY_B = '102';
    /**
     * Logistic type / Category C
     */
    const CATEGORY_C = '103';
    /**
     * Logistic type / Category D
     */
    const CATEGORY_D = '104';
    /**
     * Logistic type / Category E
     */
    const CATEGORY_E = '105';
    /**
     * Logistic type / Category F
     */
    const CATEGORY_F = '106';
    /**
     * Logistic type / Category G
     */
    const CATEGORY_G = '107';
    /**
     * Logistic type / Category H
     */
    const CATEGORY_H = '108';
    /**
     * Logistic type / Category I
     */
    const CATEGORY_I = '109';
    /**
     * Logistic type / Category J
     */
    const CATEGORY_J = '110';
    /**
     * Logistic type / Category K
     */
    const CATEGORY_K = '111';
    /**
     * Logistic type / Category custom #1
     */
    const CATEGORY_CUSTOM_1 = '201';
    /**
     * Logistic type / Category custom #2
     */
    const CATEGORY_CUSTOM_2 = '202';
    /**
     * Logistic type / Category custom #3
     */
    const CATEGORY_CUSTOM_3 = '203';
    /**
     * Logistic type / Category custom #4
     */
    const CATEGORY_CUSTOM_4 = '204';
    /**
     * Logistic type / Category custom #5
     */
    const CATEGORY_CUSTOM_5 = '205';
    /**
     * Logistic type / Category large products #1 (qualified sellers only)
     */
    const CATEGORY_LARGE_PRODUCTS_1 = '206';
    /**
     * Logistic type / Category large products #2 (qualified sellers only)
     */
    const CATEGORY_LARGE_PRODUCTS_2 = '207';
    /**
     * Logistic type / Category large products #3 (qualified sellers only)
     */
    const CATEGORY_LARGE_PRODUCTS_3 = '208';
    /**
     * Logistic type / Category large products #4 (qualified sellers only)
     */
    const CATEGORY_LARGE_PRODUCTS_4 = '209';
    /**
     * Logistic type / Category large products #5 (qualified sellers only)
     */
    const CATEGORY_LARGE_PRODUCTS_5 = '210';


    protected static $validType = array(
        self::CATEGORY_A,
        self::CATEGORY_B,
        self::CATEGORY_C,
        self::CATEGORY_D,
        self::CATEGORY_E,
        self::CATEGORY_F,
        self::CATEGORY_G,
        self::CATEGORY_H,
        self::CATEGORY_I,
        self::CATEGORY_J,
        self::CATEGORY_K,
        self::CATEGORY_CUSTOM_1,
        self::CATEGORY_CUSTOM_2,
        self::CATEGORY_CUSTOM_3,
        self::CATEGORY_CUSTOM_4,
        self::CATEGORY_CUSTOM_5,
        self::CATEGORY_LARGE_PRODUCTS_1,
        self::CATEGORY_LARGE_PRODUCTS_2,
        self::CATEGORY_LARGE_PRODUCTS_3,
        self::CATEGORY_LARGE_PRODUCTS_4,
        self::CATEGORY_LARGE_PRODUCTS_5
    );
}
