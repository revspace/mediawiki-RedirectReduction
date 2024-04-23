<?php

namespace MediaWiki\Extension\RedirectReduction;

use MediaWiki\Hook\TestCanonicalRedirectHook;

class Hooks implements TestCanonicalRedirectHook {
	public function onTestCanonicalRedirect ( $request, $title, $output ) {
		if ( !$title->exists() ) {
			return false;
		}
		return true;
	}
}
