<?php
/**
 *
 */

namespace numberApplication;


class numberApplication
{
    /**@var string*/
    private $point;

    public function __construct($point = 4)
    {
        $this->point = $point;
    }

    /**
     * add
     *@param $leftOperate
     *@param $rightOperate
     *@return string
     */
    public function bcAdd(string $leftOperate,string $rightOperate):string {
        return bcadd($leftOperate,$rightOperate,$this->point);
    }

    /**
     * sub
     * @param $leftOperate
     * @param $rightOperate
     * @return string
     */
    public function bcSub(string $leftOperate,string $rightOperate):string {
        return bcsub($leftOperate,$rightOperate,$this->point);
    }

    /**
     * mul
     * @param $leftOperate
     * @param $rightOperate
     * @return string
     * @throws \Exception
     */
    public function bcMul(string $leftOperate,string $rightOperate):string {
        return bcmul($leftOperate,$rightOperate,$this->point);
    }
    /**
     * div
     * @param $leftOperate
     * @param $rightOperate
     * @return string
     * @throws \Exception
     */
    public function bcDiv(string $leftOperate,string $rightOperate):string {
        try{
            return bcdiv($leftOperate,$rightOperate,$this->point);
        }catch (\Throwable $exception){
            throw new \Exception($exception->getMessage());
        }
    }

}