<?php

namespace Tests\Unit\Services;

use App\Services\DataGenerateService;
use App\Repositories\DataGenerateRepository;
use Tests\TestCase;

/**
 * Class DataGenerateServiceTest
 * @package Tests\Unit\Services
 * @group ddg
 */
class DataGenerateServiceTest extends TestCase
{
	/**
	 * 正常系
	 */
	public function test_getInitialData_01()
	{
		// モックの設定
		$mock_categories = [
			[
				'id' => 1,
				'name' => 'hoge',
			]
		];
		$mock_data_types = [
			[
				'id' => 1,
				'category_id' => 1,
				'name' => 'fuga',
			]
		];
		$mock = $this->mock(DataGenerateRepository::class, function ($mock) use ($mock_categories, $mock_data_types) {
			$mock->shouldReceive('getCategories')->with()->andReturn($mock_categories);
			$mock->shouldReceive('getDataTypes')->with()->andReturn($mock_data_types);
		});
		$this->app->instance(DataGenerateRepository::class, $mock);

		// テスト
		$service = $this->app->make(DataGenerateService::class);
		list($categories, $data_types) = $service->getInitialData();

		// データ確認
		$this->assertSame($mock_categories, $categories);
		$this->assertSame($mock_data_types, $data_types);
	}
}
