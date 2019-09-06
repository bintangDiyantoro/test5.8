<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Student;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Students extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate(5);
        // return view('students.index', ['students' => $studens]);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        // $data = [
        //     'name' => $request->name,
        //     'nis' => $request->nis,
        //     'email' => $request->email,
        //     'department' => $request->department
        // ];
        $request->validate([
            'name' => 'required',
            'nis' => 'required|numeric|digits:8',
            'email' => 'required|email  ',
            'department' => 'required'
        ]);
        Student::create($request->all());
        return redirect('students')->with('status', 'Data successfully added!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.detail', ['student' => $student]);
        // return $student->id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students/edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'nis' => 'required|numeric|digits:8',
            'email' => 'required|email  ',
            'department' => 'required'
        ]);
        $data = [
            'name' => $request->name,
            'nis' => $request->nis,
            'email' => $request->email,
            'department' => $request->department
        ];
        Student::where('id', $student->id)->update($data);
        return redirect('students')->with('status', 'Data ' . $request->name . ' successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('students')->with('status', 'Data of ' . $student->name . ' is successfully deleted!');
    }

    public function restore()
    {
        // return $student;
        Student::onlyTrashed()->restore();
        return redirect('students')->with('status', 'Data is restored!');
    }

    public function excelsave()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $students = Student::all();
        $sheet->setCellValue('A1', 'Name');
        $sheet->setCellValue('B1', 'NIS');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Department');
        $i = 2;
        foreach ($students as $std) {
            $sheet->setCellValue('A' . $i, $std->name);
            $sheet->setCellValue('B' . $i, $std->nis);
            $sheet->setCellValue('C' . $i, $std->email);
            $sheet->setCellValue('D' . $i, $std->department);
            $i++;
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save('Students.xlsx');
        return redirect('students')->with('status', 'Data is saved to excel file!');
    }

    public function retrieveexcel()
    {
        $inputFileType = 'Xlsx';
        $inputFileName = 'Students.xlsx';

        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(TRUE);
        $spreadsheet = $reader->load("Students.xlsx");

        $worksheet = $spreadsheet->getActiveSheet();
        return view('students.retrieve', compact('worksheet'));
    }
}
