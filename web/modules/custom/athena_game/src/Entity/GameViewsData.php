<?php

namespace Drupal\athena_game\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Game entities.
 */
class GameViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
