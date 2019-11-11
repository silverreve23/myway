<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Way</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/bulma.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="content container">
                <div class="title has-text-centered">The progress of my way.</div>
				<p class="has-text-centered">Progress left: <strong>{{ $progressDaysLeft }} days</strong></p>
				<progress class="progress is-primary" value="{{ $progressFullDays - $progressDaysLeft }}" max="{{ $progressFullDays }}"></progress>
				<div class="body">
					<div class="columns">
						<div class="column">
							Financial ({{ $progressFullFinance }}$):
							<progress class="progress is-danger" value="{{ $progressHasFinance }}" max="{{ $progressFullFinance }}"></progress>
						</div>
						<div class="column">
							Skill ({{ $progressFullSkill }} points):
							<progress class="progress is-info" value="{{ $progressHasSkill }}" max="{{ $progressFullSkill }}"></progress>
						</div>
						<div class="column">
							English ({{ $progressFullEnglish }} exs):
							<progress class="progress is-success" value="{{ $progressHasEnglish }}" max="{{ $progressFullEnglish }}"></progress>
						</div>
						<div class="column">
							Sport ({{ $progressFullSport }} h):
							<progress class="progress is-warning" value="{{ $progressHasSport }}" max="{{ $progressFullSport }}"></progress>
						</div>
					</div>
					<div class="columns">
						<div class="column">
							<p>{{ $motionSentence }}</p>
						</div>
					</div>
				</div>
            </div>
    </body>
</html>
