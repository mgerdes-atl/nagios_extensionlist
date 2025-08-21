<?php

declare(strict_types=1);

namespace SchamsNet\NagiosExtensionlist\Domain\Repository\Traits;

/*
 * This file is part of the TYPO3 Extension "Nagios Extensionlist"
 *
 * Author: Michael Schams <schams.net>
 * Website: https://schams.net
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please see
 * https://www.gnu.org/licenses/gpl.html
 */

use TYPO3\CMS\Extbase\Object\ObjectManagerInterface;
use TYPO3\CMS\Extbase\Persistence\Generic\QuerySettingsInterface;

/**
 * Trait for the ExtensionlistRepository allows additional settings when accessing the model.
 *
 * @property ObjectManagerInterface $objectManager
 */
trait ExtensionlistTrait
{
    private QuerySettingsInterface $querySettings;

    /**
     * Inject query settings.
     */
    public function injectQuerySettings(QuerySettingsInterface $querySettings): void
    {
        $this->querySettings = $querySettings;
    }

    /**
     * Initialize the object.
     */
    public function initializeObject(): void
    {
        $querySettings = clone $this->querySettings;
        // Example: adjust query settings for this model
        //$querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }
}
