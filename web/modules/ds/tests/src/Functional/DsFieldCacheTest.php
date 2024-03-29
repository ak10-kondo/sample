<?php

namespace Drupal\Tests\ds\Functional;

use Drupal\Core\Cache\Cache;
use Drupal\Tests\node\Traits\NodeCreationTrait;

/**
 * Cache field test.
 *
 * @group ds
 */
class DsFieldCacheTest extends TestBase {

  use NodeCreationTrait;
  use DsTestTrait;

  protected static $modules = ['page_cache', 'dynamic_page_cache'];

  /**
   * {@inheritdoc}
   */
  public function setUp(): void {
    parent::setUp();
    $this->drupalLogin($this->adminUser);
  }

  /**
   * Test a DS field that returns cache data.
   *
   * @throws \Drupal\Core\Entity\EntityMalformedException
   * @throws \Behat\Mink\Exception\ResponseTextException
   */
  public function testCachedDsField() {
    $fields = [
      'fields[test_caching_field][region]' => 'left',
      'fields[test_caching_field][label]' => 'above',
    ];
    $this->drupalGet('admin/structure/types/manage/article/display');
    $this->submitForm(['ds_layout' => 'ds_2col'], 'Save');
    $this->dsConfigureUi($fields);

    // Create and visit the node so that it is cached as empty, ensure the title
    // doesn't appear.
    $node = $this->createNode(['type' => 'article']);
    $this->drupalGet($node->toUrl());
    $this->assertSession()->pageTextNotContains('DsField Shown');

    // Enable our toggle flag and invalidate the cache so that our field should
    // appear.
    \Drupal::state()->set('ds_test_show_field', TRUE);
    Cache::invalidateTags(['ds_my_custom_tags']);

    // Visit the node and assert that it now appears.
    $this->drupalGet($node->toUrl());
    $this->assertSession()->pageTextContains('DsField Shown');
  }

}
