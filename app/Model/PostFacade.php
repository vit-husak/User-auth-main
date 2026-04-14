<?php

declare(strict_types=1);

namespace App\Model;

use Nette;
use Nette\Database\Table\ActiveRow;
use Nette\Database\Table\Selection;


final class PostFacade
{
	private const TableName = 'posts';

	public function __construct(
		private Nette\Database\Explorer $database,
	) {
	}


	public function getAll(): Selection
	{
		return $this->database->table(self::TableName)
			->order('created_at DESC');
	}


	public function getById(int $id): ?ActiveRow
	{
		return $this->database->table(self::TableName)
			->get($id);
	}
}
