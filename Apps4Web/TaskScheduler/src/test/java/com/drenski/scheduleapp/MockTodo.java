import com.drenski.scheduleapp.model.Todo;

import java.util.Date;

public class MockTodo {

    private Todo sampleTodo;

    public Todo getSampleTodo() {
        sampleTodo = new Todo(44, "root", "cleaning", new Date(), true);
        return sampleTodo;
    }


}
