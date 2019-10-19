<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ProgressModel;
use Storage;

class IndexController extends Controller {
	private const COUNT_DAYS = 300;
	private const COUNT_FINANCE = 10000;
	private const COUNT_SKILL = 600;
	private const COUNT_ENGLISH = 5000;
	private const COUNT_SPORT = 1000;
	private const ERA_HOURS = 86400;
	public function index(){
		$progressFullDays = self::COUNT_DAYS;
		$progressFullFinance = self::COUNT_FINANCE;
		$progressFullSkill = self::COUNT_SKILL;
		$progressFullEnglish = self::COUNT_ENGLISH;
		$progressFullSport = self::COUNT_SPORT;
		$motionSentence = $this->getMotionSentence();
		$progressDaysLeft = $this->getProgressDayLet();
		$progressHasFinance = ProgressModel::getHasFinance();
		$progressHasSkill = ProgressModel::getHasSkill();
		$progressHasEnglish = ProgressModel::getHasEnglish();
		$progressHasSport = ProgressModel::getHasSport();
		return view('client/index', compact(
			'progressFullDays',
			'progressFullFinance',
			'progressFullSkill',
			'progressFullEnglish',
			'progressFullSport',
			'progressDaysLeft',
			'progressHasFinance',
			'progressHasSkill',
			'progressHasEnglish',
			'progressHasSport',
			'motionSentence'
		));
	}

	public function getMotionSentence(){
		$disk = Storage::disk('public');
		$content = $disk->get('text/motivation.txt');
		$sentences = explode("\n\n", $content);
		return trim(
			@$sentences[rand(0, count($sentences) - 1)]
		);
	}

	public function getProgressDayLet(){
		$datetimeEnd = strtotime("Sunday, 16 August 2020");
		$datetimeNow = time();
		$datetimeLeft = $datetimeEnd - $datetimeNow;
		$daysLeft = ceil($datetimeLeft / self::ERA_HOURS);
		return $daysLeft;
	}
}
