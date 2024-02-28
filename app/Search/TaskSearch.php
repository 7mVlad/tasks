<?php

namespace App\Search;

use App\Models\Task;
use Illuminate\Database\Query\Builder;

class TaskSearch
{
    protected ?int $status = null;

    public function __construct(array $data)
    {
        foreach ($data as $name => $value) {
            $this->{$name} = $value;
        }
    }

    public function search()
    {
        return Task::query()
            ->when(!empty($this->status), function (Builder $query) {
                $query->where('status', $this->status);
            })
            ->latest();
    }
}