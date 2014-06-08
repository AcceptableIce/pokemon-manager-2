@extends('layout')
@section('title', 'Pokemon Viewer')
@section('includes')
	<link rel='stylesheet' type='text/css' href='/css/toggle-switch.css' />
	<link rel='stylesheet' type='text/css' href='/css/dnd.css' />
@stop
@section('script')

@stop
@section('content')
<div class="sheet">
	<img class="logo" src="http://cdn.acceptableice.com/pkmn/logo.png">
	<div class="cha-record">CHARACTER RECORD SHEET</div>
	<div class="top-item-group">
		<div class="top-item"><div class="item large-item">{{$pkmn->name}}</div><div class="item-desc">CHARACTER NAME</div></div>
		<div class="top-item"><div class="item large-item">{{$pkmn->owner()->username}}</div><div class="item-desc">PLAYER</div></div>
	</div>
	<div class="top-item-group">
		<div class="top-item"><div class="item med-item" style="font-size: 1.0em">{{'Lvl '.$pkmn->level().' '.$pkmn->species()->name}}</div><div class="item-desc">CLASS AND LEVEL</div></div>
		<div class="top-item"><div class="item short-item" style="font-size: 1.0em">{{$pkmn->species()->name}}</div><div class="item-desc">RACE</div></div>
		<div class="top-item"><div class="item short-item" style="font-size: 1.0em">{{$pkmn->nature()->name}}</div><div class="item-desc">ALIGNMENT</div></div>
		<div class="top-item"><div class="item short-item" style="font-size: 1.0em">{{$pkmn->type1()->name.' / '.$pkmn->type2()->name}}</div><div class="item-desc"><strike>DEITY</strike> TYPE</div></div>
	</div>
	<div class="top-item-group">
		<div class="top-item"><div class="item tiny-item"></div><div class="item-desc">SIZE</div></div>
		<div class="top-item"><div class="item tiny-item"></div><div class="item-desc">AGE</div></div>
		<div class="top-item"><div class="item tiny-item"></div><div class="item-desc">GENDER</div></div>
		<div class="top-item"><div class="item tiny-item"></div><div class="item-desc">HEIGHT</div></div>

		<div class="top-item"><div class="item tiny-item"></div><div class="item-desc">WEIGHT</div></div>
		<div class="top-item"><div class="item tiny-item"></div><div class="item-desc">EYES</div></div>
		<div class="top-item"><div class="item tiny-item"></div><div class="item-desc">HAIR</div></div>
		<div class="top-item"><div class="item tiny-item"></div><div class="item-desc">SKIN</div></div>
	</div>

	<div class="stats">
		<div class="stats-header">
			<div class="stat-header-item" style="width: 60px">ABILITY NAME</div>
			<div class="stat-header-item">ABILITY SCORE</div>
			<div class="stat-header-item">ABILITY MODIFIER</div>
			<div class="stat-header-item">TEMPORARY SCORE</div>
			<div class="stat-header-item">TEMPORARY MODIFIER</div>
		</div>
		<div class="stats-row">
			<div class="stat-def"><div class="stat-bold">STR</div><div class="stat-full">STRENGTH</div></div>
			<div class="stat-box">{{$pkmn->totalStats()->hp}}</div><div class="stat-box">{{$pkmn->getModifierForStat($pkmn->totalStats()->hp)}}</div>
			<div class="temp-area"><div class="temp-box">0</div><div class="temp-box temp-box-right">0</div></div>
		</div>
		<div class="stats-row">
			<div class="stat-def"><div class="stat-bold">DEX</div><div class="stat-full">DEXTERITY</div></div>
			<div class="stat-box">{{$pkmn->totalStats()->attack}}</div><div class="stat-box">{{$pkmn->getModifierForStat($pkmn->totalStats()->attack)}}</div>
			<div class="temp-area"><div class="temp-box">0</div><div class="temp-box temp-box-right">0</div></div>
		</div>
		<div class="stats-row">
			<div class="stat-def"><div class="stat-bold">CON</div><div class="stat-full">CONSTITUTION</div></div>
			<div class="stat-box">{{$pkmn->totalStats()->defense}}</div><div class="stat-box">{{$pkmn->getModifierForStat($pkmn->totalStats()->defense)}}</div>
			<div class="temp-area"><div class="temp-box">0</div><div class="temp-box temp-box-right">0</div></div>
		</div>
		<div class="stats-row">
			<div class="stat-def"><div class="stat-bold">INT</div><div class="stat-full">INTELLIGENCE</div></div>
			<div class="stat-box">{{$pkmn->totalStats()->spattack}}</div><div class="stat-box">{{$pkmn->getModifierForStat($pkmn->totalStats()->spattack)}}</div>
			<div class="temp-area"><div class="temp-box">0</div><div class="temp-box temp-box-right">0</div></div>
		</div>
		<div class="stats-row">
			<div class="stat-def"><div class="stat-bold">WIS</div><div class="stat-full">WISDOM</div></div>
			<div class="stat-box">{{$pkmn->totalStats()->spdefense}}</div><div class="stat-box">{{$pkmn->getModifierForStat($pkmn->totalStats()->spdefense)}}</div>
			<div class="temp-area"><div class="temp-box">0</div><div class="temp-box temp-box-right">0</div></div>
		</div>
		<div class="stats-row">
			<div class="stat-def"><div class="stat-bold">CHA</div><div class="stat-full">CHARISMA</div></div>
			<div class="stat-box">{{$pkmn->totalStats()->speed}}</div><div class="stat-box">{{$pkmn->getModifierForStat($pkmn->totalStats()->speed)}}</div>
			<div class="temp-area"><div class="temp-box">0</div><div class="temp-box temp-box-right">0</div></div>
		</div>
	</div>

	<div class="top-stats">
		<div class="top-stats-header">
			<div class="top-stat-header-item" style="width: 60px; margin-left: 67px;"><b>TOTAL</b></div>
			<div class="top-stat-header-item" style="width: 150px;">WOUNDS/CURRENT HP</div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 228px;">NONLETHAL DAMAGE</div>
			<div class="top-stat-header-item" style="width: 100px; margin-left: 88px; font-size: 0.9em"><b>SPEED</b></div>
		</div>
		<div class="top-stat-def"><div class="stat-bold">HP</div><div class="stat-full">HIT POINTS</div></div>
		<div class="hp-box">{{$pkmn->level()*($pkmn->getModifierForStat($pkmn->totalStats()->speed) > 0 ? $pkmn->getModifierForStat($pkmn->totalStats()->speed) : 1)}}</div><div class="hp-box-large"></div>
		<div class="hp-box-large" style="width: 120px"></div>
		<div class="hp-box-large" style="width: 200px; margin-left: 20px"></div>
		<div style="clear: both; margin-top: 3px"></div>

		<div class="top-stat-def"><div class="stat-bold">AC</div><div class="stat-full">ARMOR CLASS</div></div>
		<div class="hp-box">{{10 + $pkmn->getModifierForStat($pkmn->totalStats()->attack) + $pkmn->attackEvasion() + $pkmn->specialAttackEvasion()}}</div>
		<div class='symbol'>=</div><div class='symbol' style="left: 10px; top: 3px"><b>10 + </b></div>
		<div class="ev-box">{{$pkmn->attackEvasion()}}</div><div class='symbol plus'>+</div>		
		<div class="ev-box">{{$pkmn->specialAttackEvasion()}}</div><div class='symbol plus'>+</div>
		<div class="ev-box">{{ $pkmn->getModifierForStat($pkmn->totalStats()->attack)}}</div><div class='symbol plus'>+</div>
		<div class="ev-box">0</div><div class='symbol plus'>+</div>
		<div class="ev-box">0</div><div class='symbol plus'>+</div>
		<div class="ev-box">0</div><div class='symbol plus'>+</div>
		<div class="ev-box">0</div>

		<div style="clear: both;"></div>
		<div class="top-stats-header">
			<div class="top-stat-header-item" style="width: 60px; margin-left: 67px; position: relative; top: -10px;"><b>TOTAL</b></div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 35px">ARMOR BONUS</div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 12px">SHIELD BONUS</div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 12px">DEX MODIFIER</div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 12px">SIZE MODIFIER</div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 12px">NATURAL ARMOR</div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 12px">DEFLECTION MODIFIER</div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 12px">MISC MODIFIER</div>
		</div>
	</div>
	<div class="dr">
		<div class="top-stat-header-item" style="width: 122px; margin-left: 20px; clear: both"><b>DAMAGE REDUCTION</b></div>
		<div class="hp-box-large" style="width: 140px; text-align: center">0</div>
	</div>

	<div class="ac-mods">
		<div class="top-stat-def" style="width: 70px"><div class="stat-bold">TOUCH</div><div class="stat-full">ARMOR CLASS</div></div>	
		<div class="hp-box">{{10 + $pkmn->getModifierForStat($pkmn->totalStats()->attack)}}</div>
		<div class="top-stat-def" style="width: 120px; margin-left: 10px"><div class="stat-bold">FLAT-FOOTED</div><div class="stat-full">ARMOR CLASS</div></div>	
		<div class="hp-box">{{10 + $pkmn->attackEvasion() + $pkmn->specialAttackEvasion()}}</div>
		<div style="clear: both; margin-top: 10px"></div>

		<div class="top-stat-def" style="width: 120px;"><div class="stat-bold">INITIATIVE</div><div class="stat-full">MODIFIER</div></div>	
		<div class="hp-box">{{$pkmn->getModifierForStat($pkmn->totalStats()->attack)}}</div><div class='symbol'>=</div>
		<div class="ev-box" style="left: 10px">{{$pkmn->getModifierForStat($pkmn->totalStats()->attack)}}</div><div class='symbol'>+</div>
		<div class="ev-box" style="left: 10px">0</div>
		<div style="clear: both; margin-top: 10px"></div>
		<div class="top-stats-header">
			<div class="top-stat-header-item" style="width: 60px; margin-left: 127px; position: relative; top: -10px"><b>TOTAL</b></div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 3px;">DEX MODIFIER</div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 7px;">MISC MODIFIER</div>

		</div>
	</div>

	<div class="saves">
		<div class="stats-header">
			<div class="stat-header-item" style="width: 100px"><b>SAVING THROWS</b></div>
			<div class="stat-header-item"><b>TOTAL</b></div>
			<div class="stat-header-item" style="margin-left: 1px">BASE SAVE</div>
			<div class="stat-header-item" style="margin-left: 1px">ABILITY MODIFIER</div>
			<div class="stat-header-item" style="margin-left: 2px">MAGIC MODIFIER</div>
			<div class="stat-header-item" style="margin-left: 2px">MISC MODIFIER</div>
			<div class="stat-header-item" style="margin-left: 5px">TEMPORARY MODIFIER</div>

		</div>
		<div class="stats-row">
			<div class="stat-def" style="width: 100px"><div class="stat-bold">FORTITUDE</div><div class="stat-full">(CONSTITUTION)</div></div>
			<div class="stat-box" style="margin-right: 0px">{{$pkmn->getModifierForStat($pkmn->totalStats()->defense)}}</div><div class="symbol">=</div>
			<div class="ev-box save-box">0</div><div class='symbol plus'>+</div>
			<div class="ev-box save-box">{{$pkmn->getModifierForStat($pkmn->totalStats()->defense)}}</div><div class='symbol plus'>+</div>
			<div class="ev-box save-box">0</div><div class='symbol plus'>+</div>
			<div class="ev-box save-box">0</div><div class='symbol plus'>+</div>
			<div class="temp-area" style="width: 54px; margin-left: 10px"><div class="temp-box">0</div></div>

			<div class="stat-def" style="width: 100px"><div class="stat-bold">REFLEX</div><div class="stat-full">(DEXTERITY)</div></div>
			<div class="stat-box" style="margin-right: 0px">{{$pkmn->getModifierForStat($pkmn->totalStats()->attack)}}</div><div class="symbol">=</div>
			<div class="ev-box save-box">0</div><div class='symbol plus'>+</div>
			<div class="ev-box save-box">{{$pkmn->getModifierForStat($pkmn->totalStats()->attack)}}</div><div class='symbol plus'>+</div>
			<div class="ev-box save-box">0</div><div class='symbol plus'>+</div>
			<div class="ev-box save-box">0</div><div class='symbol plus'>+</div>
			<div class="temp-area" style="width: 54px; margin-left: 10px"><div class="temp-box">0</div></div>

			<div class="stat-def" style="width: 100px"><div class="stat-bold">WILL</div><div class="stat-full">(WISDOM)</div></div>
			<div class="stat-box" style="margin-right: 0px">{{$pkmn->getModifierForStat($pkmn->totalStats()->spdefense)}}</div><div class="symbol">=</div>
			<div class="ev-box save-box">0</div><div class='symbol plus'>+</div>
			<div class="ev-box save-box">{{$pkmn->getModifierForStat($pkmn->totalStats()->spdefense)}}</div><div class='symbol plus'>+</div>
			<div class="ev-box save-box">0</div><div class='symbol plus'>+</div>
			<div class="ev-box save-box">0</div><div class='symbol plus'>+</div>
			<div class="temp-area" style="width: 54px; margin-left: 10px"><div class="temp-box">0</div></div>
		</div>

		<div class="conmod">CONDITIONAL MODIFIERS</div>

	</div>

	<div class="bab-section">
		<div class="stat-def" style="width: 200px"><div class="stat-bold" style="margin-top: 4px">BASE ATTACK BONUS</div></div><div class="stat-box" style="margin-top: 2px; margin-right: 0px; width: 50px">0</div>
		<div class="stat-def" style="width: 100px; margin-left: 20px"><div class="stat-bold" style="margin-top: 2px; font-size: 0.7em">SPELL<br>RESISTANCE</div></div><div class="stat-box" style="margin-top: 2px; margin-right: 0px; width: 40px">0</div>
		<div style="clear: both; margin-top: 10px"></div>
		<div class="stat-def" style="width: 150px"><div class="stat-bold">GRAPPLE</div><div class="stat-full">MODIFIER</div></div>
		<div class="stat-box" style="margin-top: 2px; margin-right: 0px;">{{$pkmn->getModifierForStat($pkmn->totalStats()->hp)}}</div><div class="symbol">=</div>
		<div class="ev-box save-box">0</div><div class='symbol plus'>+</div>
		<div class="ev-box save-box">{{$pkmn->getModifierForStat($pkmn->totalStats()->hp)}}</div><div class='symbol plus'>+</div>
		<div class="ev-box save-box">0</div><div class='symbol plus'>+</div>
		<div class="ev-box save-box">0</div>
		<div style="clear: both; margin-top: 10px"></div>

		<div class="top-stats-header">
			<div class="top-stat-header-item" style="width: 40px; margin-left: 167px; position: relative; top: -10px"><b>TOTAL</b></div>
			<div class="top-stat-header-item" style="width: 60px; margin-left: 0px;">BASE ATTACK BONUS</div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: -2px;">STRENGTH MODIFIER</div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 2px;">SIZE MODIFIER</div>
			<div class="top-stat-header-item" style="width: 50px; margin-left: 2px;">MISC MODIFIER</div>
		</div>
	</div>

	<div class="attacks">
		@foreach($pkmn->moves()->limit(5)->get() as $m)
		<div class="attack-shell">
			<div class="attack-head">ATTACK</div><div class="attack-head-item" style="width: 170px">ATTACK BONUS</div><div class="attack-head-item" style="width: 100px">DAMAGE</div><div class="attack-head-item" style="width: 100px; border-right: 2px solid #000">CRITICAL</div>
			<div style="clear: both;"></div>
			<div class="attack-content" style="border-left: 2px solid #000">{{$m->definition()->name}}</div>
			<div class="attack-content" style="width: 170px;">{{$m->definition()->attack_type == 0 ? $pkmn->getModifierForStat($pkmn->totalStats()->attack) : $pkmn->getModifierForStat($pkmn->totalStats()->spattack)}}</div>
			<div class="attack-content" style="width: 100px;">{{$m->definition()->damage}}</div>
			<div class="attack-content" style="width: 100px; border-right: 2px solid #000">19-20/x2</div>
			<div style="clear: both;"></div>
			<div class="attack-head-item no-margin" style="width: 80px; border-left: 2px solid #000">RANGE</div><div class="attack-head-item no-margin" style="width: 100px">TYPE</div><div class="attack-head-item no-margin" style="width: 419px; border-right: 2px solid #000">NOTES</div>
			<div style="clear: both;"></div>
			<div class="attack-content" style="border-left: 2px solid #000; width: 80px; border-bottom: 2px solid #000">-</div>
			<div class="attack-content" style="width: 100px; border-bottom: 2px solid #000">{{$m->definition()->type()->name}}</div>
			<div class="attack-content" style="border-right: 2px solid #000; width: 419px; border-bottom: 2px solid #000">{{$m->definition()->attack_range}}</div>
			<div style="clear: both;"></div>
			<div class="ammunition">AMMUNITION</div><div class="ammunition-blank">PP</div><div class="spacer"></div>@for($i = 0; $i < 30; $i++) <div class="ammunition-box"></div> @if($i % 5 == 4) <div class="spacer"></div> @endif @endfor
		</div>
		@endforeach
	</div>
	<? $skills = array(
		array("name" => "APPRAISE", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => true),
		array("name" => "BALANCE", "key" => "DEX*", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->attack), "trained" => true),
		array("name" => "BLUFF", "key" => "CHA", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->speed), "trained" => true),
		array("name" => "CLIMB", "key" => "STR*", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->hp), "trained" => true),
		array("name" => "CONCENTRATION", "key" => "CON", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->defense), "trained" => true),
		array("name" => "CRAFT (________________)", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => true),
		array("name" => "CRAFT (________________)", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => true),
		array("name" => "CRAFT (________________)", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => true),
		array("name" => "DECIPHER SCRIPT", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => false),
		array("name" => "DIPLOMACY", "key" => "CHA", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->speed), "trained" => true),
		array("name" => "ESCAPE ARTIST", "key" => "DEX*", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->attack), "trained" => true),
		array("name" => "FORGERY", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => true),
		array("name" => "GATHER INFORMATION", "key" => "CHA", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->speed), "trained" => true),
		array("name" => "HANDLE ANIMAL", "key" => "CHA", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->speed), "trained" => false),
		array("name" => "HEAL", "key" => "WIS", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spdefense), "trained" => true),
		array("name" => "HIDE", "key" => "DEX*", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->attack), "trained" => true),
		array("name" => "INTIMIDATE", "key" => "CHA", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->speed), "trained" => true),
		array("name" => "JUMP", "key" => "STR*", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->hp), "trained" => true),
		array("name" => "KNOWLEDGE (________________)", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => false),
		array("name" => "KNOWLEDGE (________________)", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => false),
		array("name" => "KNOWLEDGE (________________)", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => false),
		array("name" => "KNOWLEDGE (________________)", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => false),
		array("name" => "KNOWLEDGE (________________)", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => false),
		array("name" => "LISTEN", "key" => "WIS", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spdefense), "trained" => true),
		array("name" => "MOVE SILENTLY", "key" => "DEX*", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->attack), "trained" => true),
		array("name" => "OPEN LOCK", "key" => "DEX", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->attack), "trained" => false),
		array("name" => "PERFORM  (________________)", "key" => "CHA", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->speed), "trained" => false),
		array("name" => "PERFORM  (________________)", "key" => "CHA", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->speed), "trained" => false),
		array("name" => "PERFORM  (________________)", "key" => "CHA", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->speed), "trained" => false),
		array("name" => "PROFESSION  (________________)", "key" => "WIS", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spdefense), "trained" => false),
		array("name" => "PROFESSION  (________________)", "key" => "WIS", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spdefense), "trained" => false),
		array("name" => "RIDE", "key" => "DEX", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->attack), "trained" => true),
		array("name" => "SEARCH", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => true),
		array("name" => "SENSE MOTIVE", "key" => "WIS", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spdefense), "trained" => true),
		array("name" => "SLEIGHT OF HAND", "key" => "DEX*", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->attack), "trained" => false),
		array("name" => "SPELLCRAFT", "key" => "INT", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spattack), "trained" => false),
		array("name" => "SPOT", "key" => "WIS", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spdefense), "trained" => true),
		array("name" => "SURVIVAL", "key" => "WIS", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->spdefense), "trained" => true),
		array("name" => "SWIM", "key" => "STR*", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->hp), "trained" => true),
		array("name" => "TUMBLE", "key" => "DEX*", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->attack), "trained" => false),
		array("name" => "USE MAGIC DEVICE", "key" => "CHA", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->speed), "trained" => false),
		array("name" => "USE ROPE", "key" => "DEX", "stat" => $pkmn->getModifierForStat($pkmn->totalStats()->attack), "trained" => true)
	);
	?>
	<div class="skills">
		<div class="skill-header"><div class="skill-title">SKILLS</div><div class="skill-ranks-box">/</div><div class="skill-rank-text">MAX RANKS<br>(CLASS/CROSS-CLASS)</div></div>
		<div class="class-skill-text">CLASS SKILL?</div><div class="skill-name-text">SKILL NAME</div><div class="skill-column-header" style="font-weight: 800">KEY ABILITY</div>
		<div class="skill-column-header">SKILL MODIFIER</div><div class="skill-column-header">ABILITY MODIFIER</div><div class="skill-column-header">RANKS</div><div class="skill-column-header">MISC MODIFIER</div>
		<div style="clear: both; margin-top: 10px"></div>
	@foreach($skills as $s)
		<div class="skill-row">
			<div class="cross-class-box"></div><div class="skill-name"><span>{{$s['name']}}</span>@if($s['trained']) <div class="trained-box"></div> @endif</div>
			<div class="skill-ability">{{$s['key']}}</div><div class="skill-modifier-box">{{$s['stat']}}</div><div class="skill-equals">=</div><div class="skill-ability-mod">{{$s['stat']}}</div><div class="skill-plus-1">+</div>
			<div class="skill-ranks">0</div><div class="skill-plus-2">+</div><div class="skill-misc-mod">0</div>
		</div>
	@endforeach
		<div class="skill-notes">
			<div class="trained-box" style="left: -8px"></div> <div class="skill-note-text" style="margin-left: -3px">Denotes a skill that can be used untrained.</div>
			<div class="cross-class-box" style="position: relative; top: 22px"></div> <div class="skill-note-text" style="margin-left: 11px">Mark this box with an X if the skill is a class skill for the character.</div>
			<div class="astrick">*</div><div class="skill-note-text" style="margin-left: 16px">Armor check penalty, if any, applies. (Double penalty for Swim.)</div>
		</div>
	</div>
</div>

@stop