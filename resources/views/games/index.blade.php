@extends('layout')

@section('title', 'Games')

@section('content')


	<h1>Game list</h1>

	<body>

		
		
		<div class= "col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
			<div class= "panel panel-primary">
				
				<div class= "panel-heading" style= "list-style-type:none;"> Games 
					
				<div class="panel-body">

					<ul class="list-group">
						@foreach($games as $game)
						<li class="list-group-item"><a href="/games/{{$game->id}}" >{{ $game->name}}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		

		{{-- hierin komt een lijst van games. --}}
		{{-- prijs per product,  subweb misschien --}}
		{{-- reacties in de sub? --}}



<!-- 		<div class="directory-header-new__banner-cover tw-overflow-hidden tw-relative"><div class="directory-header-new__banner directory-header-new__banner--blur" data-test-selector="directory-banner-image" style="height: 100%; position: absolute; width: 100%; z-index: -1; background-image: url(&quot;https://static-cdn.jtvnw.net/previews-ttv/live_user_szybkijakbarth-320x180.jpg&quot;);"></div><div class="tw-bottom-0 tw-left-0 tw-mg-b-2 tw-mg-t-3 tw-mg-x-3 tw-right-0"><div class="tw-flex"><div class="tw-flex-shrink-1 tw-md-flex-shrink-0 tw-mg-r-2"><img class="directory-header-new__box-image tw-border-radius-medium tw-elevation-3 tw-image" data-test-selector="directory-header-new-avatar-image" alt="Grand Theft Auto" src="https://static-cdn.jtvnw.net/ttv-boxart/Grand%20Theft%20Auto-130x173.jpg"></div><div class="tw-flex tw-flex-column tw-justify-content-end"><h1 class="tw-c-text-base tw-strong">Grand Theft Auto</h1><div class="tw-mg-b-1"><p class="tw-c-text-base">21.834 volgers · 1 kijkers</p></div><div class="tw-mg-b-1"><div class="tw-inline-block"><div class="tw-font-size-7 tw-inline-block tw-mg-b-05 tw-mg-r-05"><div class="tw-border-radius-medium tw-c-text-base tw-inline-block tw-tag"><a class="tw-block tw-border-radius-medium tw-full-width tw-interactable tw-interactable--alt tw-interactable--border tw-interactive" data-a-target="Actie" href="/directory/tags/4d1eaa36-f750-4862-b7e9-d0a13970d535"><div class="tw-align-items-center tw-flex tw-tag__content"><div>Actie</div></div></a></div></div><div class="tw-font-size-7 tw-inline-block tw-mg-b-05 tw-mg-r-05"><div class="tw-border-radius-medium tw-c-text-base tw-inline-block tw-tag"><a class="tw-block tw-border-radius-medium tw-full-width tw-interactable tw-interactable--alt tw-interactable--border tw-interactive" data-a-target="Rijd-/racegame" href="/directory/tags/f5ed5bd0-78cb-4467-8e13-9172a210b64d"><div class="tw-align-items-center tw-flex tw-tag__content"><div>Rijd-/racegame</div></div></a></div></div><div class="tw-font-size-7 tw-inline-block tw-mg-b-05 tw-mg-r-0"><div class="tw-border-radius-medium tw-c-text-base tw-inline-block tw-tag"><a class="tw-block tw-border-radius-medium tw-full-width tw-interactable tw-interactable--alt tw-interactable--border tw-interactive" data-a-target="Open wereld" href="/directory/tags/a682f560-5186-4871-b97a-8d8e3f4308e9"><div class="tw-align-items-center tw-flex tw-tag__content"><div>Open wereld</div></div></a></div></div></div></div><div class="tw-inline-flex"><div class="tw-overflow-hidden"><button aria-label="Volgen" class="tw-align-items-center tw-align-middle tw-border-bottom-left-radius-medium tw-border-bottom-right-radius-medium tw-border-top-left-radius-medium tw-border-top-right-radius-medium tw-core-button tw-core-button--border tw-core-button--padded tw-core-button--primary tw-inline-flex tw-interactive tw-justify-content-center tw-overflow-hidden tw-relative" data-a-target="game-directory-follow-button" data-test-selector="follow-game-button-component"><div class="tw-align-items-center tw-flex tw-flex-grow-0"><div data-a-target="tw-core-button-label-text" class="tw-flex-grow-0"><div class="tw-align-items-center tw-flex tw-justify-content-center"><div class="tw-align-items-center tw-flex tw-justify-content-center tw-mg-r-05" style="transform: translateX(0px) scale(1); transition: transform 300ms ease 0s;"><div data-a-target="tw-animation-target" class="tw-animation tw-animation--bounce-in tw-animation--duration-long tw-animation--fill-mode-both tw-animation--timing-ease"><div class="tw-align-items-center tw-flex tw-justify-content-center"><figure class="tw-svg"><svg class="tw-svg__asset tw-svg__asset--heart tw-svg__asset--inherit" width="20px" height="20px" version="1.1" viewBox="0 0 20 20" x="0px" y="0px"><path d="M13.535 3C11.998 3 10.767 4.046 10 4.937 9.232 4.046 8.002 3 6.465 3 3.535 3 2 5.347 2 7.665c0 3.683 4.762 7.488 6.808 8.954a2.047 2.047 0 0 0 2.383 0c2.048-1.466 6.81-5.271 6.81-8.954C18 5.347 16.466 3 13.534 3" fill-rule="evenodd"></path></svg></figure></div></div></div><span style="opacity: 1; transition: opacity 300ms ease 0s;">Volgen</span></div></div></div></button></div></div></div></div></div></div> -->
		


	</body>

@endsection
