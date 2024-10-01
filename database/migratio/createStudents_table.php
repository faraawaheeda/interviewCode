Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('class');
    $table->integer('level');
    $table->string('parent_contact');
    $table->timestamps();
});
