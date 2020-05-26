<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tool
 * @package App
 *
 * @OA\Schema(
 *     description="Tool model",
 *     title="Tool model",
 *     @OA\Xml(
 *         name="Tool"
 *     )
 * )
 */
class Tool extends Model
{

    /**
     * @OA\Property(
     *     format="int64",
     *     description="ID",
     *     title="ID",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *     format="string",
     *     description="Title",
     *     title="Title",
     *     example="Notion"
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @OA\Property(
     *     format="string",
     *     description="Link",
     *     title="Link",
     *     example="https://notion.so"
     * )
     *
     * @var string
     */

    private $link;
    /**
     * @OA\Property(
     *     format="string",
     *     description="Description",
     *     title="Description",
     *     example="All in one tool to organize teams and ideas. Write, plan, collaborate, and get organized."
     * )
     *
     * @var string
     */
    private $description;

    private $tags;

    protected $fillable = ['title', 'link', 'description'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'pivot'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->select(['name']);
    }
}
