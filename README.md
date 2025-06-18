# base.module.migration.userfields.provider.string

<table>
<tr>
<td>
<a href="https://github.com/Liventin/base.module.migration.userfields">Bitrix Base Module Service Migration User Fields</a>
</td>
</tr>
</table>

install | update

```
"require": {
    "liventin/base.module.migration.userfields.provider.string": "^1.0.0"
}
```
redirect (optional)
```
"extra": {
  "service-redirect": {
    "liventin/base.module.migration.userfields.provider.string": "module.name",
  }
}
```
PhpStorm Life Template Example
```
<?php

namespace ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Migration\UserFields;

use ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Service\Container;
use ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Service\Migration\UserField\UserFieldEntity;
use ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Service\Migration\UserField\UserFieldService;
use ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Src\Migration\UserField\Providers\StringProvider;

class ExampleStringUserField implements UserFieldEntity
{
    public static function getEntityId(): string
    {
        return 'USER';
    }

    public static function getFieldName(): string
    {
        return 'UF_EXAMPLE_USER_FIELD';
    }

    public static function getUserTypeId(): string
    {
        return 'string';
    }

    public static function getParams(): array
    {
        /** @var StringProvider ${DS}provider */
        ${DS}provider = Container::get(UserFieldService::SERVICE_CODE)->getProvider(self::getUserTypeId());
        return ${DS}provider
            ->setSort(100)
            ->setMandatory(false)
            ->setShowFilter(true)
            ->setIsSearchable(true)
            ->setSize(50)
            ->setRows(1)
            ->setDefaultValue('')
            ->setLabels('Пользовательское поле для пользователей')
            ->getParamsToArray();
    }
}
```