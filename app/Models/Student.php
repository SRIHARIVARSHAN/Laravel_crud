<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * 
 * @property int $id
 * @property string $name
 * @property string $dept
 * @property float $cgpa
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Student extends Model
{
	protected $table = 'students';

	protected $casts = [
		'cgpa' => 'float'
	];

	protected $fillable = [
		'name',
		'dept',
		'cgpa'
	];
}
