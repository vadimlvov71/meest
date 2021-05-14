<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parcel".
 *
 * @property int $id
 * @property string $weight
 * @property int $category_id
 * @property int $user_id
 * @property string $price
 * @property string|null $status
 */
class Parcel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parcel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['weight', 'category_id', 'price'], 'required'],
            [['category_id', 'user_id'], 'integer'],
           // [['status'], 'default', 'value'=> 'unsent'],
            [['weight', 'price', 'size'], 'string', 'max' => 255],
            [['user_id'], 'default', 'value'=> $this->getUserId()],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'weight' => 'Weight',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
            'price' => 'Price',
            'status' => 'Status',
        ];
    }
	public function getUserId(){
		return (\Yii::$app->user->identity->id);
	}
    /**
     * {@inheritdoc}
     * @return ParcelQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ParcelQuery(get_called_class());
    }
}
