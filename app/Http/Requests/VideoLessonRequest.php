<?php

namespace App\Http\Requests;

class VideoLessonRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'url' => 'required|url',
        ];
    }
}
