<?php

namespace common\models;

use Yii;

class MyPengguna extends \yii\db\ActiveRecord
{
	public static function tableName()
	{
		return 'pengguna';
	}

	public function attributeLabels()
	{
		return [
			'username' => 'Kata Pengguna'
		];
	}

	public function rules()
	{
		return [
			[
				['username', 'password_hash', 'verification_token', 'email', 'status', 'created_at'], 'required'
			],
			[
				['status', 'created_at', 'updated_at', 'supervisor'], 'integer'
			],
			[
				['username'], 'string', 'max' => 20
			],
			[
				['password_hash', 'password_reset_token', 'verification_token', 'email', 'auth_key', 'password'], 'string', 'max' => 100
			],
			[
				['supervisor'], 'exist', 'skipOnError' => true, 'targetClass' => MyPengguna::class, 'targetAttribute' => ['supervisor' => 'id']
			]
		];
	}

	public function getPenggunas()
	{
		return $this->hasMany(MyPengguna::class, ['supervisor' => 'id']);
	}

	public function getSupervisor0()
	{
		return $this->hasOne(MyPengguna::class, ['id' => 'supervisor']);
	}
}
