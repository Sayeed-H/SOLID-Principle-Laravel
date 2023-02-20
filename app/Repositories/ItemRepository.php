<?php

namespace App\Repositories;
use App\Repositories\ItemRepositoryInterface;

use App\Models\Item;

class ItemRepository implements ItemRepositoryInterface
{
    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function all()
    {
        return $this->item->all();
    }

    public function create(array $data)
    {
        return $this->item->create($data);
    }

    public function update(array $data, $id)
    {
        $item = $this->item->findOrFail($id);
        return $item->update($data);
    }

    public function delete($id)
    {
        $item = $this->item->findOrFail($id);
        return $item->delete();
    }
    public function find(int $id): ?Item
    {
    return Item::find($id);
    }

}
