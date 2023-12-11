<?php

class ActionFeed extends Action {
    public function getName() {
		// This should be the same name as used when registering the action in $wgActions.
		return 'feedTest';
	}

    public function show() {
        // Create local instances of the context variables we need, to simplify later code.
		$out = $this->getOutput();
		$request = $this->getRequest();

        $article = $this->getArticle();
        $wikipage = $this->getWikiPage();
		GenerateWikiFeed::onActionFeed($article, $wikipage, $out);
    }
}