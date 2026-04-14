<?php

declare(strict_types=1);

namespace App\Presentation\Home;

use App\Model\PostFacade;
use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{
	public function __construct(
		private PostFacade $postFacade,
	) {
	}


	public function renderDefault(): void
	{
		$this->template->posts = $this->postFacade->getAll();
	}
}
