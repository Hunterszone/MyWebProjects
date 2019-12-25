import com.drenski.scheduleapp.model.Todo;
import org.junit.Before;
import org.junit.Test;

import java.util.Date;

import static org.junit.Assert.assertNotNull;
import static org.junit.Assert.assertTrue;

public class TodoTest {

    private MockTodo todo;

    @Before
    public void setUp() {
        todo = new MockTodo();
    }

    @Test
    public void testProperties() {
        assertNotNull("Id is null", todo.getSampleTodo().getId());
        assertNotNull("User is null", todo.getSampleTodo().getUser());
        assertNotNull("Task is null", todo.getSampleTodo().getTask());
        assertTrue("Task is less than 5 chars", todo.getSampleTodo().getTask().length() >= 5);
        assertNotNull("TargetDate is null", todo.getSampleTodo().getTargetDate());
        assertNotNull("Status is null", todo.getSampleTodo().getDone());
    }
}
