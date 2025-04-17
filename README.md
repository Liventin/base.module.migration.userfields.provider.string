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
    "liventin/base.module.migration.userfields.provider.string": "dev-main"
}
"repositories": [
    {
      "type": "vcs",
      "url": "git@github.com:liventin/base.module.migration.userfields.provider.string"
    }
]
```
redirect (optional)
```
"extra": {
  "service-redirect": {
    "liventin/base.module.migration.userfields.provider.string": "module.name",
  }
},