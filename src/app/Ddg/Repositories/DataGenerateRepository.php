<?php

namespace App\Ddg\Repositories;

use App\Ddg\Models\DdgCategory;
use App\Ddg\Models\DdgDataType;

/**
 * Class DataGenerateRepository
 * @package App\Repositories
 */
class DataGenerateRepository implements DataGenerateRepositoryInterface
{
	/**
	 * @var DdgCategory
	 */
	private $ddg_category;

	/**
	 * @var DdgDataType
	 */
	private $ddg_data_type;

	/**
	 * DataGenerateRepository constructor.
	 *
	 * @param DdgCategory $ddg_category
	 * @param DdgDataType $ddg_data_type
	 */
	public function __construct(DdgCategory $ddg_category, DdgDataType $ddg_data_type)
	{
		$this->ddg_category = $ddg_category;
		$this->ddg_data_type = $ddg_data_type;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCategories(): array
	{
		return $this->ddg_category->all()->toArray();
	}

	/**
	 * {@inheritdoc}
	 */
	public function getDataTypes(): array
	{
		return $this->ddg_data_type->all()->toArray();
	}
}