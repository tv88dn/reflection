<?php
/**
 * Created by PhpStorm.
 * User: bigdrop
 * Date: 19.11.15
 * Time: 11:40
 */

namespace tv88dn\reflection;


trait BaseReflection
{
    /**
     * Get name of current programming module (name of model, controller and view folder)
     *
     * @return string
     */
    protected function getModuleName()
    {
        return str_replace('Controller', '', \yii\helpers\StringHelper::basename(get_class()));
    }

    /**
     * Get name of Assets file
     *
     * @return string
     */
    protected function getAssetName()
    {
        return end(explode('/', \Yii::getAlias('@app'))).'\assets\\'.$this->getModuleName().'Asset';
    }

    /**
     * Get name of Helper file
     *
     * @return string
     */
    protected function getHelperName()
    {
        return end(explode('/', \Yii::getAlias('@app'))).'\helpers\\'.$this->getModuleName().'Helper';
    }

    /**
     * Get name of Model file
     *
     * @return string
     */
    protected function getModelName()
    {
        return end(explode('/', \Yii::getAlias('@app'))).'\models\\'.$this->getModuleName();
    }

    protected function getSearchModelName()
    {
        return end(explode('/', \Yii::getAlias('@app'))).'\models\search\\'.$this->getModuleName();
    }
}