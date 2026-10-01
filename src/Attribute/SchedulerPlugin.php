<?php

declare(strict_types=1);

namespace Drupal\scheduler\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Attribute class for scheduler entity plugins.
 *
 * @see \Drupal\scheduler\Annotation\SchedulerPlugin
 * @see \Drupal\scheduler\SchedulerPluginManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class SchedulerPlugin extends Plugin {

  /**
   * Constructs a SchedulerPlugin attribute.
   *
   * @param string $id
   *   The internal id / machine name of the plugin.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $label
   *   The readable name of the plugin.
   * @param string $entityType
   *   The entity type.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $description
   *   (optional) Description of plugin.
   * @param string|null $dependency
   *   (optional) Module name that plugin requires.
   * @param string|null $typeFieldName
   *   (optional) The name of the type/bundle field for the entity.
   * @param string $develGenerateForm
   *   (optional) The Form ID of the devel generate form.
   * @param string|null $collectionRoute
   *   (optional) The route of the collection overview page.
   * @param string $userViewRoute
   *   (optional) The route of the scheduled view on the user profile page.
   * @param string|null $schedulerEventClass
   *   (optional) The event class for Scheduler events relating to the entity.
   * @param string|null $publishAction
   *   (optional) The name of the publish action for the entity type.
   * @param string|null $unpublishAction
   *   (optional) The name of the unpublish action for the entity type.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly TranslatableMarkup $label,
    public readonly string $entityType,
    public readonly ?TranslatableMarkup $description = NULL,
    public readonly ?string $dependency = NULL,
    public readonly ?string $typeFieldName = NULL,
    public readonly string $develGenerateForm = '',
    public readonly ?string $collectionRoute = NULL,
    public readonly string $userViewRoute = '',
    public readonly ?string $schedulerEventClass = NULL,
    public readonly ?string $publishAction = NULL,
    public readonly ?string $unpublishAction = NULL,
    public readonly ?string $deriver = NULL,
  ) {}

}
