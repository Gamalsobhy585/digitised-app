<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status, 
            'status_display' => $this->mapStatus($this->status), 
            'due_date' => $this->due_date,
        ];
    }

    protected function mapStatus(int $status): string
    {
        return match($status) {
            1 => 'pending',
            2 => 'completed',
            default => 'unknown',
        };
    }
    

    public static function collection($resource)
    {
        $collection = parent::collection($resource);
        
        return $collection->additional([
            'pagination' => [
                'total' => $resource->total(),
                'count' => $resource->count(),
                'per_page' => $resource->perPage(),
                'current_page' => $resource->currentPage(),
                'total_pages' => $resource->lastPage(),
                'from' => $resource->firstItem(),
                'to' => $resource->lastItem(),
                'previous_page' => $resource->previousPageUrl(),
                'next_page' => $resource->nextPageUrl(),
                'has_more_pages' => $resource->hasMorePages(),
            ]
        ]);
    }




}
