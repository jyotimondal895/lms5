<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Result;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
        Admin::create([
            'adminid' => 'admin',
            'password' => '12345',
        ]);

        return view('admin/index', [
            'message' => 'Admin added successfully.'
        ]);

    } catch (\Exception $e) {

        return view('admin/index', [
            'message' => 'already exist'
        ]);
    }
        return view('admin/index', [
            'message' => ''
        ]);
    }
public function login(Request $request)
{
    $request->validate([
        'adminid' => 'required',
        'password' => 'required',
    ]);

    $admin = Admin::where('adminid', $request->adminid)
                  ->where('password', $request->password)
                  ->first();

    if ($admin) {
        $request->session()->put('adm', $admin->id);
        return redirect('/admin/dashboard');
    } else {
        return view('admin/index', ['message'=>'Invalid Admin ID or Password']);
    }
}
    public function dashboard(Request $request)
    {
        $students = Student::all();

        return view('admin.dashboard', [
            'students' => $students,
            'message' => ''
        ]);
    }
     public function students(Request $request)
    {
        $students = Student::all();

        return view('admin.students', [
            'students' => $students,
            'message' => ''
        ]);
    }
     public function teachers(Request $request)
    {
        $teachers = Teacher::all();

        return view('admin.teachers', [
            'teachers' => $teachers,
            'message' => ''
        ]);
    }
     public function courses(Request $request)
    {
        $courses = Course::all();

        return view('admin.courses', [
            'courses' => $courses,
            'message' => ''
        ]);
    }
     public function exams(Request $request)
    {
        $exams = Exam::all();
        $courses = Course::all();

        return view('admin.exams', [
            'exams' => $exams,
            'courses' => $courses,
            'message' => ''
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function results(Request $request)
{
    $results = Result::all();
    $courses = Course::all();
    $exams = Exam::all();
    $students = Student::all();

    return view('admin.results', [
        'results' => $results,
        'courses' => $courses,
        'exams'   => $exams,
        'students' => $students,
                'message' => ''
    ]);
}
    public function addstudent()
    {
        return view('admin.addstudent', [
            'message' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    // Validate request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'password' => 'required|min:6',
    ]);

    // Store student
    Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' =>$request->password, // Encrypt password
    ]);

    return view('admin/addstudent', ['message'=>'Student added successfully.']);
}
    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editstudent($id)
    {
        $studentdata = Student::find($id);
      

        return view('admin.editstudent', [
            'student' => $studentdata
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function updatestudent(Request $request, $id)
    {
    $data = $request->all();
    $student = Student::find($id);
    $student->update([
    'name' => $data['name'],
    'email' => $data['email'],
    'password' => $data['password'] ?? $student->password
]);
      return redirect('/admin/students');  
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletestudent($id)
    {
        $student = Student::find($id);
    $student->delete();
     return redirect('/admin/students');  
    }
    public function addteacher()
    {
        return view('admin.addteacher', [
            'message' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
  public function storeteacher(Request $request)
{
    
    // Validate request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:teachers,email',
        'password' => 'required|min:6',
        'department' => 'required',
        'experience' => 'required|numeric',
    ]);

    // Store teacher
    Teacher::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'department' => $request->department,
        'experience' => $request->experience,
    ]);
    //print_r($request->all());

    return view('admin/addteacher', ['message'=>'Teacher added successfully.']);
}
public function editteacher($id)
    {
        $teacherdata = Teacher::find($id);
      

        return view('admin.editteacher', [
            'teacher' => $teacherdata
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateteacher(Request $request, $id)
    {
    $data = $request->all();
    $teacher = Teacher::find($id);
    $teacher->update([
    'name' => $data['name'],
    'email' => $data['email'],
    'department' => $data['department'],
    'experience' => $data['experience'],
    'password' => $data['password'] ?? $teacher->password
]);
      return redirect('/admin/teachers');  
    
    }
    public function deleteteacher($id)
    {
        $teacher = Teacher::find($id);
    $teacher->delete();
     return redirect('/admin/teachers');  
    }
     public function addcourse()
    {
        return view('admin.addcourse', [
            'message' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
  public function storecourse(Request $request)
{
    
    // Validate request
    $request->validate([
        
        'name' => 'required|string|max:255',
        'fee' => 'required|numeric',
        'duration' => 'required|string|max:100',
    ]);

    // Store teacher
    Course::create([
        'name' => $request->name,
        'fee' => $request->fee,
        'duration' => $request->duration,
    ]);
    //print_r($request->all());

    return view('admin/addcourse', ['message'=>'Course added successfully.']);
}
public function editcourse($id)
    {
        $coursedata = Course::find($id);
      

        return view('admin.editcourse', [
            'course' => $coursedata
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function updatecourse(Request $request, $id)
{
    $course = Course::findOrFail($id);

    $course->update([
        'coursename' => $request->coursename,
        'fee' => $request->fee,
        'duration' => $request->duration,
    ]);

    return redirect('/admin/courses');
}
    public function deletecourse($id)
    {
        $course = Course::find($id);
    $course->delete();
     return redirect('/admin/courses');  
    }
     public function addexam()
    {
        $courses = Course::all();

        return view('admin.addexam', [
            'courses' => $courses,
            'message' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
  public function storeexam(Request $request)
{
    
    //Validate request
    /*$request->validate([
        
        'exam_name'   => 'required|string|max:255',
        'exam_date'   => 'required|date',
        'start_time'  => 'required',
        'end_time'    => 'required|after:start_time',
        'exam_type'   => 'required|string|max:100',
        'total_marks' => 'required|numeric|min:2',
    ]);*/

    //Store exam
    Exam::create([
        'course_id'=> $request->course_id,
        'exam_name'   => $request->exam_name,
        'exam_date'   => $request->exam_date,
        'start_time'  => $request->start_time,
        'end_time'    => $request->end_time,
        'exam_type'   => $request->exam_type,
        'total_marks' => $request->total_marks,
        'semester' => $request->semester
    ]);
    //print_r($request->all());
    $courses = Course::all();


    return view('admin/addexam', ['courses' => $courses,'message'=>'exam added successfully.']);
}
 public function addresult()
    {
        $courses = Course::all();
        $exams = Exam::all();
        $students = Student::all();

        return view('admin.addresult', [
            'courses' => $courses,
            'exams'   => $exams,
            'students' => $students,
            'message' => ''
             ]);
    }
    /**
     * Store a newly created resource in storage.
     */
  public function storeresult(Request $request)
{
     //Store result
    Result::create([
        'course_id'=> $request->course_id,
        'exam_name'   => $request->exam_name,
        'student_id'   => $request->student_id,
        'marks_obtained'  => $request->marks_obtained,
        'total_marks'    => $request->total_marks,
        'grade'   => $request->grade,
        'status' => $request->status,
        'semester' => $request->semester
    ]);
     $courses = Course::all();
     $exams = Exam::all();
     $students = Student::all();


    return view('admin/addresult', ['courses' => $courses,'exams' => $exams,'students' => $students,'message'=>'result added successfully.']);
}

// Show Edit Exam Page
public function editexam($id)
{
    // Get exam by ID
    $exam = Exam::findOrFail($id);

    // Get all courses
    $courses = Course::all();

    // Open edit page
    return view('admin.editexam', [
        'exam' => $exam,
        'courses' => $courses,
        'message' => ''
    ]);
}
public function updateexam(Request $request, $id)
{
    // Find exam
    $exam = Exam::findOrFail($id);

    // Update exam details
    $exam->update([
        'course_id'   => $request->course_id,
        'exam_name'   => $request->exam_name,
        'exam_date'   => $request->exam_date,
        'start_time'  => $request->start_time,
        'end_time'    => $request->end_time,
        'exam_type'   => $request->exam_type,
        'total_marks' => $request->total_marks,
        'semester'    => $request->semester,
    ]);

    return redirect('/admin/exams');
    }
   public function deleteexam($id)
    {
        $exam = Exam::find($id);
    $exam->delete();
     return redirect('/admin/exams');  
    } 
}