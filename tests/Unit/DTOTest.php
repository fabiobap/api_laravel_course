<?php

namespace Tests\Unit;

use App\DTO\AlternativeDTO;
use App\DTO\CategoryDTO;
use App\DTO\CommentDTO;
use App\DTO\ContentDTO;
use App\DTO\CourseDTO;
use App\DTO\EnrollmentDTO;
use App\DTO\FavoriteDTO;
use App\DTO\QuestionDTO;
use App\DTO\QuizDTO;
use App\DTO\TextContentDTO;
use App\DTO\TopicDTO;
use App\DTO\UserDTO;
use App\DTO\VideoContentDTO;
use App\DTO\ViewContentDTO;
use PHPUnit\Framework\TestCase;

class DTOTest extends TestCase
{
    const RANDOM_STRING = 'Random String';
    const ORDER = 1;

    public function test_category_dto(): void
    {
        $data = ['name' => self::RANDOM_STRING];
        $dto = new CategoryDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals(self::RANDOM_STRING, $dto->name);
        $this->assertEquals($data['name'], $dto->name);
    }

    public function test_alternative_dto(): void
    {
        $data = [
            'title' => self::RANDOM_STRING,
            'order' => self::ORDER,
            'question_id' => 2,
            'is_correct' => true,
        ];

        $dto = new AlternativeDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }

    public function test_alternative_dto_without_order_field(): void
    {
        $data = [
            'title' => self::RANDOM_STRING,
            'question_id' => 2,
            'is_correct' => true,
        ];

        $dto = new AlternativeDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertArrayHasKey('order', $arr);
        $this->assertEquals(null, $dto->order);
        $this->assertNotEquals($data, $arr);
    }

    public function test_alternative_dto_without_is_correct_field(): void
    {
        $data = [
            'title' => self::RANDOM_STRING,
            'question_id' => 2,
            'order' => self::ORDER,
        ];

        $dto = new AlternativeDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertArrayHasKey('is_correct', $arr);
        $this->assertFalse($dto->is_correct);
        $this->assertNotEquals($data, $arr);
    }

    public function test_comment_dto(): void
    {
        $data = [
            'content_id' => 1,
            'comment' => self::RANDOM_STRING,
            'user_id' => 3,
            'is_published' => true,
        ];

        $dto = new CommentDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }

    public function test_comment_dto_without_is_published_field(): void
    {
        $data = [
            'content_id' => 1,
            'comment' => self::RANDOM_STRING,
            'user_id' => 3,
        ];

        $dto = new CommentDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertArrayHasKey('is_published', $arr);
        $this->assertFalse($dto->is_published);
        $this->assertNotEquals($data, $arr);
    }

    public function test_content_dto(): void
    {
        $data = [
            'title' => self::RANDOM_STRING,
            'order' => self::ORDER,
            'topic_id' => 2,
            'is_published' => true,
            'description' => self::RANDOM_STRING,
        ];

        $dto = new ContentDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }

    public function test_content_dto_without_is_published_field(): void
    {
        $data = [
            'title' => self::RANDOM_STRING,
            'order' => self::ORDER,
            'topic_id' => 2,
            'description' => self::RANDOM_STRING,
        ];

        $dto = new ContentDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertArrayHasKey('is_published', $arr);
        $this->assertFalse($dto->is_published);
        $this->assertNotEquals($data, $arr);
    }

    public function test_content_dto_without_description_field(): void
    {
        $data = [
            'title' => self::RANDOM_STRING,
            'order' => self::ORDER,
            'topic_id' => 2,
            'is_published' => true,
        ];

        $dto = new ContentDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertArrayHasKey('description', $arr);
        $this->assertEquals(null, $dto->description);
        $this->assertNotEquals($data, $arr);
    }

    public function test_content_dto_without_order_field(): void
    {
        $data = [
            'title' => self::RANDOM_STRING,
            'topic_id' => 2,
            'is_published' => true,
            'description' => self::RANDOM_STRING,
        ];

        $dto = new ContentDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertArrayHasKey('order', $arr);
        $this->assertEquals(null, $dto->order);
        $this->assertNotEquals($data, $arr);
    }

    public function test_course_dto(): void
    {
        $data = [
            'category_id' => 1,
            'title' => self::RANDOM_STRING,
            'description' => self::RANDOM_STRING,
            'slug' => self::RANDOM_STRING,
            'user_id' => 3,
        ];

        $dto = new CourseDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }

    public function test_course_dto_without_category_id_field(): void
    {
        $data = [
            'title' => self::RANDOM_STRING,
            'description' => self::RANDOM_STRING,
            'slug' => self::RANDOM_STRING,
            'user_id' => 3,
        ];

        $dto = new CourseDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertArrayHasKey('category_id', $arr);
        $this->assertEquals(null, $dto->category_id);
        $this->assertNotEquals($data, $arr);
    }

    public function test_enrollment_dto(): void
    {
        $data = ['course_id' => 1, 'user_id' => 2];
        $dto = new EnrollmentDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }

    public function test_favorite_dto(): void
    {
        $data = ['content_id' => 1, 'user_id' => 2];
        $dto = new FavoriteDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }

    public function test_question_dto(): void
    {
        $data = [
            'title' => self::RANDOM_STRING,
            'description' => self::RANDOM_STRING,
            'quiz_id' => 2,
            'order' => self::ORDER,
        ];

        $dto = new QuestionDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }

    public function test_question_dto_without_order_field(): void
    {
        $data = [
            'title' => self::RANDOM_STRING,
            'description' => self::RANDOM_STRING,
            'quiz_id' => 2,
        ];

        $dto = new QuestionDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertArrayHasKey('order', $arr);
        $this->assertEquals(null, $dto->order);
        $this->assertNotEquals($data, $arr);
    }

    public function test_quiz_dto(): void
    {
        $data = [
            'course_id' => 1,
            'title' => self::RANDOM_STRING,
            'description' => self::RANDOM_STRING,
            'slug' => self::RANDOM_STRING,
        ];

        $dto = new QuizDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }

    public function test_text_content_dto(): void
    {
        $data = ['content' => self::RANDOM_STRING];
        $dto = new TextContentDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals(self::RANDOM_STRING, $dto->content);
        $this->assertEquals($data['content'], $dto->content);
    }

    public function test_topic_dto(): void
    {
        $data = [
            'course_id' => 1,
            'title' => self::RANDOM_STRING,
            'order'=> self::ORDER,
        ];

        $dto = new TopicDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }

    public function test_topic_dto_without_order_field(): void
    {
        $data = [
            'course_id' => 1,
            'title' => self::RANDOM_STRING,
        ];

        $dto = new TopicDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertArrayHasKey('order', $arr);
        $this->assertEquals(null, $dto->order);
        $this->assertNotEquals($data, $arr);
    }

    public function test_user_dto(): void
    {
        $data = [
            'name' => self::RANDOM_STRING,
            'email' => self::RANDOM_STRING,
            'password' => self::RANDOM_STRING,
        ];

        $dto = new UserDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }

    public function test_user_dto_without_password_field(): void
    {
        $data = [
            'name' => self::RANDOM_STRING,
            'email' => self::RANDOM_STRING,
        ];

        $dto = new UserDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertArrayHasKey('password', $arr);
        $this->assertEquals(null, $dto->password);
        $this->assertNotEquals($data, $arr);
    }

    public function test_video_content_dto(): void
    {
        $data = [
            'youtube_id' => self::RANDOM_STRING,
            'metadata' => [],
        ];

        $dto = new VideoContentDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }

    public function test_video_content_dto_without_metadata_field(): void
    {
        $data = [
            'youtube_id' => self::RANDOM_STRING,
        ];

        $dto = new VideoContentDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertArrayHasKey('metadata', $arr);
        $this->assertEquals(null, $dto->metadata);
        $this->assertNotEquals($data, $arr);
    }

    public function test_view_content_dto(): void
    {
        $data = [
            'content_id' => 1,
            'user_id' => 2,
        ];

        $dto = new ViewContentDTO(...$data);

        $this->assertIsArray($arr = $dto->toArray());
        $this->assertEquals($data, $arr);
    }
}
