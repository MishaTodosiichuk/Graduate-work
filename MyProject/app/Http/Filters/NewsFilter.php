<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class NewsFilter extends AbstractFilter
{
    public const ID = 'id';
    public const TITLE = 'title';
    public const CONTENT = 'content';

    protected function getCallbacks(): array
    {
        return [
            self::ID => [$this, 'id'],
            self::TITLE => [$this, 'title'],
            self::CONTENT => [$this, 'content'],
        ];
    }

    public function id(Builder $builder, $value)
    {
        $builder->where('id', $value);
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function content(Builder $builder, $value)
    {
        $builder->where('content', 'like', "%{$value}%");
    }
}
