<?php

declare(strict_types=1);

namespace App\Presentation\Post;

use App\Model\PostFacade;
use Nette;


final class PostPresenter extends Nette\Application\UI\Presenter
{
	public function __construct(
		private PostFacade $postFacade,
	) {
	}


	public function renderShow(int $id): void
	{
		$post = $this->postFacade->getById($id);

		if (!$post) {
			$this->error('Příspěvek nenalezen.');
		}

		$this->template->post = $post;
	}
}
