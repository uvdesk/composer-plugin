<?php

namespace Webkul\UVDesk\PackageManager\Extensions;

abstract class HelpdeskExtension implements ExtensionInterface
{
    const CONFIG_TEMPLATE = <<<EXTENSIONS
<?php

return [
{REGISTERED_EXTENSIONS}
];

EXTENSIONS;

    abstract public function loadDashboardItems();
    abstract public function loadNavigationItems();
}
