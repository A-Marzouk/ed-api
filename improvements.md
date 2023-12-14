# Educational Background | Test Task

## Potential improvements:

1. API:
   1. usage of uuid's instead of ids. 
   (To make sure we do not send incremental id to the frontend, for security reasons)
   2. return data through JsonResources and not directly from the controller so that we can control which
      data to send and which not to.
2. Database design:
   1. Student progress table might be called class_progress table so that it will indicate the progress
      of students in the whole class.<br>
   2. Usage of subjects table instead of strings.<br>
   3. Avoid saving calculated data into the database directly, 
   as an example the homework_completion_rate is a calculated value from all students.
   it should be calculated not saved as best practice.
3. Front-end:
   1. Charts sometime have weird behaviour.
   2. Complete use of typescript.
4. Testing for both applications.
