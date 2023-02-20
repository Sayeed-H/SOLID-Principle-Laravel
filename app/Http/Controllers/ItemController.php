<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Repositories\ItemRepositoryInterface;

class ItemController extends Controller
{
    protected $itemRepository;

    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    public function index()
    {
        $items = $this->itemRepository->all();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(CreateItemRequest $request)
    {
        $data = $request->validated();
        $item = $this->itemRepository->create($data);
        return redirect()->route('items.index')->with('success', 'Item created successfully');
    }

    public function show($id)
    {
        $item = $this->itemRepository->find($id);
        return view('items.show', compact('item'));
    }

    public function edit($id)
    {
        $item = $this->itemRepository->find($id);
        return view('items.edit', compact('item'));
    }

    public function update(UpdateItemRequest $request, $id)
    {
        $data = $request->validated();
        $item = $this->itemRepository->update($id, $data);
        return redirect()->route('items.index')->with('success', 'Item updated successfully');
    }

    public function destroy($id)
    {
        $this->itemRepository->delete($id);
        return redirect()->route('items.index')->with('success', 'Item deleted successfully');
    }
}
