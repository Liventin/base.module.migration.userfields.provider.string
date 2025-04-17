<?php

namespace Base\Module\Src\Migration\UserField\Providers;

use Base\Module\Src\Migration\UserField\Interface\UserFieldProvider;

class StringProvider extends UserFieldProvider
{
    public function getType(): string
    {
        return 'string';
    }

    public function setSize(int $size): self
    {
        $this->settings['SIZE'] = $size;
        return $this;
    }

    public function setRows(int $rows): self
    {
        $this->settings['ROWS'] = $rows;
        return $this;
    }

    public function setDefaultValue(string $defaultValue): self
    {
        $this->settings['DEFAULT_VALUE'] = $defaultValue;
        return $this;
    }

    public function getParamsToArray(): array
    {
        return array_merge(parent::getParamsToArray(), [
            'SETTINGS' => $this->settings,
        ]);
    }
}
