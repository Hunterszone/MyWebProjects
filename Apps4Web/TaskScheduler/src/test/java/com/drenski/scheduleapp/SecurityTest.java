package com.drenski.scheduleapp;
import com.drenski.scheduleapp.security.SecurityConfiguration;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import org.springframework.security.config.annotation.ObjectPostProcessor;
import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import static org.junit.Assert.*;

public class SecurityTest implements ObjectPostProcessor<Object> {

    private AuthenticationManagerBuilder auth;
    private ObjectPostProcessor<Object> obj;
    private SecurityConfiguration secConf;

    @Before
    public void setUp() {
        obj = new SecurityTest();
        auth =  new AuthenticationManagerBuilder(obj);
        secConf = new SecurityConfiguration();
    }

    @Test
    public void testPermissions() {
        try {
            assertNotNull("Null permission not allowed!", auth.inMemoryAuthentication().withUser("root").password("root")
                    .roles(secConf.configureGlobalSecurity(auth)[0], secConf.configureGlobalSecurity(auth)[1]));
            assertEquals("Wrong permission added", "USER", secConf.configureGlobalSecurity(auth)[0]);
            assertEquals("Wrong permission added", "ADMIN", secConf.configureGlobalSecurity(auth)[1]);
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    @SuppressWarnings("unchecked")
	@Override
    public Object postProcess(Object o) {
        return null;
    }

    @After
    public void tearDown() {
        obj = null;
        auth =  null;
        secConf = null;
    }
}
