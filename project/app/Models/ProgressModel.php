<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgressModel extends Model {
	public $table = 'progress';
	protected function getHasFinance(){
		return 200;
	}

	protected function getHasSkill(){
		return 20;
	}

	protected function getHasEnglish(){
		return 10;
	}

	protected function getHasSport(){
		return 0;
	}
}
